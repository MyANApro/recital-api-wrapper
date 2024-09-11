<?php

namespace MyAnPro\RecitalApi\Api;

use Illuminate\Support\Collection;
use MyAnPro\RecitalApi\Model\ValueResponse;

class FormatResponseWebhook
{
    public function format(array $response)
    {
        $listeValues = new Collection();

        foreach ($response['extract'][0]['result']['values'] as $valeur) {
            $listeValues->push(
                new ValueResponse(
                    $valeur['value']['origin'],
                    $valeur['value']['confidence'],
                    $valeur['value']['status'],
                    $valeur['value']['page_nb'],
                    $valeur['value']['value'],
                    $valeur['value']['location'],
                    $valeur['value']['valid_page_nb'],
                    $valeur['value']['valid_value'],
                    $valeur['value']['valid_location'],
                    $valeur['value']['normalized_value_type'],
                    $valeur['value']['normalized_value'],
                    $valeur['value']['prevalidated'],
                    $valeur['value']['business_rule_strings'],
                )
            );
        }
        dd($listeValues);
    }
}
