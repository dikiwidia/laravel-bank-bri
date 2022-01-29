<?php

namespace Aslam\Bri\Traits;

trait ForeignExchange
{
    /**
     * ForexRate
     *
     * @param  string $dealt_currency
     * @param  string $counter_currency
     * @return \Aslam\Response\Response
     */

    public function ForexRate($dealt_currency, $counter_currency){
        $requestUrl = sprintf(
            '%s%s/%s/%s',
            $this->apiUrlExtra,
            $this->foreignExchange->currency_rate,
            $dealt_currency,
            $counter_currency
        );

        return $this->sendRequest('GET', $requestUrl);
    }
}
