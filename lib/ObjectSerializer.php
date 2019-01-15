<?php
/**
 * PostFinance Checkout SDK
 *
 * This library allows to interact with the PostFinance Checkout payment service.
 * PostFinance Checkout SDK: 1.0.0
 * 
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace PostFinanceCheckout\Sdk;

/**
 * This class serializes and deserializes data from and to Json.
 *
 * @category Class
 * @package  PostFinanceCheckout\Sdk
 * @author   customweb GmbH
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
final class ObjectSerializer {

	/**
	 * The path to the temporary folder (for downloading files).
	 *
	 * @var string
	 */
	private $tempFolderPath;

	/**
	 * Defined whether debug information should be logged.
	 *
	 * @var boolean
	 */
	private $enableDebugging = false;

	/**
	 * The path to the debug file.
	 *
	 * @var string
	 */
	private $debugFile = 'php://output';

	/**
	 * Constructor.
	 */
	public function __construct() {
		$this->tempFolderPath = sys_get_temp_dir();
	}

	/**
	 * Return the path of the temporary folder used to store downloaded files from endpoints with file response. By
	 * default the system's default temporary folder is used.
	 *
	 * @return string
	 */
	public function getTempFolderPath() {
		return $this->tempFolderPath;
	}

	/**
	 * Sets the path to the temporary folder (for downloading files).
	 *
	 * @param string $tempFolderPath the temporary folder path
	 * @return ObjectSerializer
	 */
	public function setTempFolderPath($tempFolderPath) {
		$this->tempFolderPath = $tempFolderPath;
		return $this;
	}

	/**
	 * Returns true, when debugging is enabled.
	 *
	 * @return boolean
	 */
	public function isDebuggingEnabled() {
		return $this->enableDebugging;
	}

	/**
	 * Enables debugging.
	 *
	 * @return ObjectSerializer
	 */
	public function enableDebugging() {
		$this->enableDebugging = true;
		return $this;
	}

	/**
	 * Disables debugging.
	 *
	 * @return ObjectSerializer
	 */
	public function disableDebugging() {
		$this->enableDebugging = false;
		return $this;
	}

	/**
	 * Returns the path to the debug file.
	 *
	 * @return string
	 */
	public function getDebugFile() {
		return $this->debugFile;
	}

	/**
	 * Sets the path to the debug file.
	 *
	 * @param string $debugFile the debug file
	 * @return ObjectSerializer
	 */
	public function setDebugFile($debugFile) {
		$this->debugFile = $debugFile;
		return $this;
	}

	/**
	 * Prepare data for serialization.
	 *
	 * @param mixed $data the data to serialize
	 * @return string|object
	 */
	public static function sanitizeForSerialization($data) {
		if (is_scalar($data) || null === $data) {
			return $data;
		} elseif ($data instanceof \DateTime) {
			return $data->format(\DateTime::ATOM);
		} elseif (is_array($data)) {
			foreach ($data as $property => $value) {
				$data[$property] = self::sanitizeForSerialization($value);
			}
			return $data;
		} elseif ($data instanceof \stdClass) {
			return $data;
		} elseif (is_object($data)) {
			$values = array();
			foreach (array_keys($data::swaggerTypes()) as $property) {
				$getter = 'get' . ucfirst($property);
				$values[$property] = self::sanitizeForSerialization($data->$getter());
			}
			return (object)$values;
		} else {
			return (string)$data;
		}
	}

	/**
	 * Sanitizes a filename by removing the path.
	 * e.g. ../../sun.gif becomes sun.gif
	 *
	 * @param string $filename the filename to be sanitized
	 * @return string
	 */
	public function sanitizeFilename($filename) {
		if (preg_match("/.*[\/\\\\](.*)$/", $filename, $match)) {
			return $match[1];
		} else {
			return $filename;
		}
	}

	/**
	 * Takes a value and turns it into a string suitable for inclusion in the path, by url-encoding.
	 *
	 * @param string $value a string which will be part of the path
	 * @return string
	 */
	public function toPathValue($value) {
		return rawurlencode($this->toString($value));
	}

	/**
	 * Takes a value and turns it into a string suitable for inclusion in the query, by imploding comma-separated if
	 * it's an object. If it's a string, pass through unchanged. It will be url-encoded later.
	 *
	 * @param string[]|string|\DateTime $object an object to be serialized to a string
	 * @return string
	 */
	public function toQueryValue($object) {
		if (is_array($object)) {
			return implode(',', $object);
		} else {
			return $this->toString($object);
		}
	}

	/**
	 * Takes a value and turns it into a string suitable for inclusion in the header. If it's a string, pass through
	 * unchanged. If it's a datetime object, format it in ISO8601
	 *
	 * @param string $value a string which will be part of the header
	 * @return string
	 */
	public function toHeaderValue($value) {
		return $this->toString($value);
	}

	/**
	 * Takes a value and turns it into a string suitable for inclusion in the http body (form parameter). If it's a
	 * string, pass through unchanged. If it's a datetime object, format it in ISO8601
	 *
	 * @param string|\SplFileObject $value the value of the form parameter
	 * @return string
	 */
	public function toFormValue($value) {
		if ($value instanceof \SplFileObject) {
			return $value->getRealPath();
		} else {
			return $this->toString($value);
		}
	}

	/**
	 * Takes a value and turns it into a string suitable for inclusion in the parameter. If it's a string, pass through
	 * unchanged. If it's a datetime object, format it in ISO8601
	 *
	 * @param string|\DateTime $value the value of the parameter
	 * @return string
	 */
	public function toString($value) {
		if ($value instanceof \DateTime) { // datetime in ISO8601 format
			return $value->format(\DateTime::ATOM);
		} else {
			return $value;
		}
	}

	/**
	 * Serializes an array to a string.
	 *
	 * @param array  $collection the collection to serialize to a string
	 * @param string $collectionFormat the format used for serialization (csv, ssv, tsv, pipes, multi)
	 * @param bool   $allowCollectionFormatMulti allow collection format to be a multidimensional array
	 * @return string
	 */
	public function serializeCollection(array $collection, $collectionFormat, $allowCollectionFormatMulti = false) {
		if ($allowCollectionFormatMulti && ('multi' === $collectionFormat)) {
			// http_build_query() almost does the job for us. We just
			// need to fix the result of multidimensional arrays.
			return preg_replace('/%5B[0-9]+%5D=/', '=', http_build_query($collection, '', '&'));
		}
		switch ($collectionFormat) {
			case 'pipes':
				return implode('|', $collection);

			case 'tsv':
				return implode("\t", $collection);

			case 'ssv':
				return implode(' ', $collection);

			case 'csv':
				// Deliberate fall through. CSV is default format.
			default:
				return implode(',', $collection);
		}
	}

	/**
	 * Deserialize a JSON string into an object.
	 *
	 * @param mixed	$data		  the data to be deserialized
	 * @param string   $class		 the class name to convert the data to
	 * @param string[] $httpHeaders   the HTTP headers
	 * @param string   $discriminator the discriminator if polymorphism is used
	 *
	 * @return object|array|null an single or an array of $class instances
	 */
	public function deserialize($data, $class, $httpHeaders = null, $discriminator = null) {
		if (null === $data) {
			return null;
		} elseif (substr($class, 0, 4) === 'map[') { // for associative array e.g. map[string,int]
			$inner = substr($class, 4, -1);
			$deserialized = array();
			if (strrpos($inner, ",") !== false) {
				$subClassArray = explode(',', $inner, 2);
				$subClass = $subClassArray[1];
				foreach ($data as $key => $value) {
					$deserialized[$key] = self::deserialize($value, $subClass, null, $discriminator);
				}
			}
			return $deserialized;
		} elseif (strcasecmp(substr($class, -2), '[]') === 0) {
			$subClass = substr($class, 0, -2);
			$values = array();
			foreach ($data as $key => $value) {
				$values[] = self::deserialize($value, $subClass, null, $discriminator);
			}
			return $values;
		} elseif ($class === 'object') {
			settype($data, 'array');
			return $data;
		} elseif ($class === '\DateTime') {
			// Some API's return an invalid, empty string as a
			// date-time property. DateTime::__construct() will return
			// the current time for empty input which is probably not
			// what is meant. The invalid empty string is probably to
			// be interpreted as a missing field/value. Let's handle
			// this graceful.
			if (!empty($data)) {
				return new \DateTime($data);
			} else {
				return null;
			}
		} elseif (in_array($class, array('void', 'bool', 'string', 'double', 'byte', 'mixed', 'integer', 'float', 'int', 'DateTime', 'number', 'boolean', 'object'), true)) {
			settype($data, $class);
			return $data;
		} elseif ($class === '\SplFileObject') {
			// determine file name
			if (array_key_exists('Content-Disposition', $httpHeaders) &&
				preg_match('/inline; filename=[\'"]?([^\'"\s]+)[\'"]?$/i', $httpHeaders['Content-Disposition'], $match)) {
				$filename = $this->getTempFolderPath() . sanitizeFilename($match[1]);
			} else {
				$filename = tempnam($this->getTempFolderPath(), '');
			}
			$deserialized = new \SplFileObject($filename, "w");
			$byteWritten = $deserialized->fwrite($data);
			if ($this->isDebuggingEnabled()) {
				error_log("[DEBUG] Written $byteWritten byte to $filename. Please move the file to a proper folder or delete the temp file after processing.".PHP_EOL, 3, $this->getDebugFile());
			}

			return $deserialized;
		} else {
			// If a discriminator is defined and points to a valid subclass, use it.
			if (!empty($discriminator) && isset($data->{$discriminator}) && is_string($data->{$discriminator})) {
				$subclass = '\PostFinanceCheckout\Sdk\Model\\' . $data->{$discriminator};
				if (is_subclass_of($subclass, $class)) {
					$class = $subclass;
				}
			}
			
			if (is_subclass_of($class, '\PostFinanceCheckout\Sdk\Model\IEnum')) {
			    return (string) $data;
			}
			
			$instance = new $class();
			foreach ($instance::swaggerTypes() as $property => $type) {
				$propertySetter = 'set' . ucfirst($property);

				if (!isset($propertySetter) || !isset($data->{$property})) {
					continue;
				}

				$propertyValue = $data->{$property};
				if (isset($propertyValue)) {
					$method = new \ReflectionMethod($class, $propertySetter);
					$method->setAccessible(true);
					$method->invoke($instance, self::deserialize($propertyValue, $type, null, $discriminator));
				}
			}
			return $instance;
		}
	}

}