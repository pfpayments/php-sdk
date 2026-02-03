<?php
/**
 * PostFinance PHP SDK
 *
 * This library allows to interact with the PostFinance payment service.
 *
 * Copyright owner: Wallee AG
 * Website: https://www.postfinance.ch/en/private.html
 * Developer email: ecosystem-team@wallee.com
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

namespace PostFinanceCheckout\Sdk\Test;

use PHPUnit\Framework\TestCase;
use PostFinanceCheckout\Sdk\Utils\EncryptionUtil;
use PostFinanceCheckout\Sdk\PostFinanceCheckoutSdkException;

class EncryptionUtilTest extends TestCase
{
    private const SIGNATURE_ALGORITHM = 'SHA256withECDSA';

    private const VALID_CONTENT_TO_VERIFY = <<<JSON
{"entityId":11,"eventId":35,"listenerEntityId":1472041829003,"listenerEntityTechnicalName":"Transaction","spaceId":1,"state":"PROCESSING","timestamp":"2023-12-19T13:43:35+0000","webhookListenerId":2}
JSON;

    private const VALID_CONTENT_SIGNATURE =
        "MEYCIQCTzbMrMsOAC6T57T9kQTb1iGZVg2R7n6pY9A4ML4P31gIhAIOoav8cG8x0jpRWQztqSJIC8gXWKq+4DuENEySvmMYf";

    private const VALID_PUBLIC_KEY =
        "MFkwEwYHKoZIzj0CAQYIKoZIzj0DAQcDQgAEdWq7ZBGsjUzhBO3e6mzUBLpjpV3TQw1bL1rk3ocjn5C5qne7TY0OBBhiWgaPtWlvUcqASz903vtfeSTQma+SBA==";

    public function testValidationShouldPassForValidContentSignatureAndKey(): void
    {
        $result = EncryptionUtil::isContentValid(
            self::VALID_CONTENT_TO_VERIFY,
            self::VALID_CONTENT_SIGNATURE,
            self::VALID_PUBLIC_KEY,
            self::SIGNATURE_ALGORITHM
        );

        $this->assertTrue($result, 'Valid public key, signature and content must fit each other');
    }

    public function testValidationShouldFailForBadContent(): void
    {
        $result = EncryptionUtil::isContentValid(
            "ModifiedContent",
            self::VALID_CONTENT_SIGNATURE,
            self::VALID_PUBLIC_KEY,
            self::SIGNATURE_ALGORITHM
        );

        $this->assertFalse($result, 'Invalid content should fail validation');
    }

    public function testValidationShouldFailForBadSignatureFormat(): void
    {
        $this->expectException(PostFinanceCheckoutSdkException::class);

        EncryptionUtil::isContentValid(
            self::VALID_CONTENT_TO_VERIFY,
            "InvalidModifiedSignature",
            self::VALID_PUBLIC_KEY,
            self::SIGNATURE_ALGORITHM
        );
    }

    public function testValidationShouldFailForBadSignatureBase64Format(): void
    {
        $this->expectException(PostFinanceCheckoutSdkException::class);

        EncryptionUtil::isContentValid(
            self::VALID_CONTENT_TO_VERIFY,
            "MEYCIQCTzbMrMsOAC6T57T9kQTb1iGZVg2R7n6pY9A4ML4P31gIhAIOoav8cG8x0jpRWQztqSJIC8gXWKq",
            self::VALID_PUBLIC_KEY,
            self::SIGNATURE_ALGORITHM
        );
    }

    public function testValidationShouldFailForBadPublicKeyFormat(): void
    {
        $this->expectException(PostFinanceCheckoutSdkException::class);

        EncryptionUtil::isContentValid(
            self::VALID_CONTENT_TO_VERIFY,
            self::VALID_CONTENT_SIGNATURE,
            "InvalidModifiedPublicKey",
            self::SIGNATURE_ALGORITHM
        );
    }

    public function testValidationShouldFailForBadPublicKeyBase64Format(): void
    {
        $this->expectException(PostFinanceCheckoutSdkException::class);

        EncryptionUtil::isContentValid(
            self::VALID_CONTENT_TO_VERIFY,
            self::VALID_CONTENT_SIGNATURE,
            "MFkwEwYHKoZIzj0CAQYIKoZIzj0DAQcDQgAEdWq7ZBGsjUzhBO3e6mzUBLpjpV3TQw1bL1rk3ocjn5C5qne7TY0OBBhiWgaPtWlvUcqASz903vtfeSTQm",
            self::SIGNATURE_ALGORITHM
        );
    }
}
