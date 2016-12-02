<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Api\V2010\Account;

use Twilio\InstanceContext;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;

class IncomingPhoneNumberContext extends InstanceContext {
    /**
     * Initialize the IncomingPhoneNumberContext
     * 
     * @param \Twilio\Version $version Version that contains the resource
     * @param string $ownerAccountSid The owner_account_sid
     * @param string $sid Fetch by unique incoming-phone-number Sid
     * @return \Twilio\Rest\Api\V2010\Account\IncomingPhoneNumberContext 
     */
    public function __construct(Version $version, $ownerAccountSid, $sid) {
        parent::__construct($version);
        
        // Path Solution
        $this->solution = array(
            'ownerAccountSid' => $ownerAccountSid,
            'sid' => $sid,
        );
        
        $this->uri = '/Accounts/' . rawurlencode($ownerAccountSid) . '/IncomingPhoneNumbers/' . rawurlencode($sid) . '.json';
    }

    /**
     * Update the IncomingPhoneNumberInstance
     * 
     * @param array|Options $options Optional Arguments
     * @return IncomingPhoneNumberInstance Updated IncomingPhoneNumberInstance
     */
    public function update($options = array()) {
        $options = new Values($options);
        
        $data = Values::of(array(
            'AccountSid' => $options['accountSid'],
            'ApiVersion' => $options['apiVersion'],
            'FriendlyName' => $options['friendlyName'],
            'SmsApplicationSid' => $options['smsApplicationSid'],
            'SmsFallbackMethod' => $options['smsFallbackMethod'],
            'SmsFallbackUrl' => $options['smsFallbackUrl'],
            'SmsMethod' => $options['smsMethod'],
            'SmsUrl' => $options['smsUrl'],
            'StatusCallback' => $options['statusCallback'],
            'StatusCallbackMethod' => $options['statusCallbackMethod'],
            'VoiceApplicationSid' => $options['voiceApplicationSid'],
            'VoiceCallerIdLookup' => $options['voiceCallerIdLookup'],
            'VoiceFallbackMethod' => $options['voiceFallbackMethod'],
            'VoiceFallbackUrl' => $options['voiceFallbackUrl'],
            'VoiceMethod' => $options['voiceMethod'],
            'VoiceUrl' => $options['voiceUrl'],
            'TrunkSid' => $options['trunkSid'],
            'EmergencyStatus' => $options['emergencyStatus'],
            'EmergencyAddressSid' => $options['emergencyAddressSid'],
        ));
        
        $payload = $this->version->update(
            'POST',
            $this->uri,
            array(),
            $data
        );
        
        return new IncomingPhoneNumberInstance(
            $this->version,
            $payload,
            $this->solution['ownerAccountSid'],
            $this->solution['sid']
        );
    }

    /**
     * Fetch a IncomingPhoneNumberInstance
     * 
     * @return IncomingPhoneNumberInstance Fetched IncomingPhoneNumberInstance
     */
    public function fetch() {
        $params = Values::of(array());
        
        $payload = $this->version->fetch(
            'GET',
            $this->uri,
            $params
        );
        
        return new IncomingPhoneNumberInstance(
            $this->version,
            $payload,
            $this->solution['ownerAccountSid'],
            $this->solution['sid']
        );
    }

    /**
     * Deletes the IncomingPhoneNumberInstance
     * 
     * @return boolean True if delete succeeds, false otherwise
     */
    public function delete() {
        return $this->version->delete('delete', $this->uri);
    }

    /**
     * Provide a friendly representation
     * 
     * @return string Machine friendly representation
     */
    public function __toString() {
        $context = array();
        foreach ($this->solution as $key => $value) {
            $context[] = "$key=$value";
        }
        return '[Twilio.Api.V2010.IncomingPhoneNumberContext ' . implode(' ', $context) . ']';
    }
}