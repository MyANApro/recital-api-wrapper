<?php

namespace MyaAnPro\RecitalApi\Api;

use Exception;
use Illuminate\Support\Arr;
use MyaAnPro\RecitalApi\Model\Datapoint;
use MyaAnPro\RecitalApi\Model\Extract;
use MyaAnPro\RecitalApi\Model\Value;

class FormatWebhookResponse
{
    /**
     * @return array<\MyaAnPro\RecitalApi\Model\Extract>
     * @throws \Exception
     */
    public static function format(array $response): array
    {
        if (!isset($response['extract'])) {
            throw new Exception("");
        }
        $extracts = Arr::wrap($response['extract']);

        $parsedResponseExtracts = [];
        foreach ($extracts as $extract) {
            $extractResult            = $extract['result'];
            $currentExtractDatapoints = [];
            foreach ($extractResult['values'] as $datapoint) {
                $datapointValue = new Value(
                    origin: $datapoint['value']['origin'],
                    confidence: $datapoint['value']['confidence'],
                    status: $datapoint['value']['status'],
                    nombrePage: $datapoint['value']['page_nb'],
                    value: $datapoint['value']['value'],
                    location: $datapoint['value']['location'],
                    validPageNb: $datapoint['value']['valid_page_nb'],
                    validValue: $datapoint['value']['valid_value'],
                    validLocation: $datapoint['value']['valid_location'],
                    normalizedValueType: $datapoint['value']['normalized_value_type'],
                    normalizedValue: $datapoint['value']['normalized_value'],
                    prevalidated: $datapoint['value']['prevalidated'],
                    businessRuleStrings: $datapoint['value']['business_rule_strings'],
                );

                $currentExtractDatapoints[] = new Datapoint(
                    dataPointId: $datapoint['data_point_id'],
                    dataPointName: $datapoint['data_point_name'],
                    value: $datapointValue,
                    position: $datapoint['position'],
                    intermediate: $datapoint['intermediate'],
                );
            }
            $parsedResponseExtracts[] = new Extract(
                id: $extractResult["id"],
                name: $extractResult["name"],
                status: $extractResult["status"],
                nombrePage: $extractResult["number_of_pages"],
                documentTypeId: $extractResult["document_type_id"],
                correctionExterneLien: $extractResult["correction_external_link"],
                customMetadata: $extractResult["custom_metadata"],
                isOcrized: $extractResult["is_ocrized"],
                correctionUser: $extractResult["user_correction"],
                groups: $extractResult["groups"],
                objets: $extractResult["objects"],
                values: $currentExtractDatapoints
            );
        }

        return $parsedResponseExtracts;
    }
}
