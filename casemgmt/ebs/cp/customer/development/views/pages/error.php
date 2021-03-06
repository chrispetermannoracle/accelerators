<!--
/* * *******************************************************************************************
 *  This file is part of the Oracle Service Cloud Accelerator Reference Integration set published
 *  by Oracle Service Cloud under the Universal Permissive License (UPL), Version 1.0
 *  included in the original distribution.
 *  Copyright (c) 2014, 2015, 2016, Oracle and/or its affiliates. All rights reserved.
 ***********************************************************************************************
 *  Accelerator Package: OSVC + EBS Enhancement
 *  link: http://www.oracle.com/technetwork/indexes/samplecode/accelerator-osvc-2525361.html
 *  OSvC release: 15.8 (August 2015)
 *  EBS release: 12.1.3
 *  reference: 150505-000099, 150420-000127
 *  date: Thu Nov 12 00:52:36 PST 2015

 *  revision: rnw-15-11-fixes-release-1
 *  SHA1: $Id: 839ca75e973c5bd96bd3f36f8c7fe220f1787841 $
 * *********************************************************************************************
 *  File: error.php
 * ****************************************************************************************** */
-->

<rn:meta title="#rn:msg:ERROR_LBL#" template="standard.php" login_required="false" />

<?
$errorID = \RightNow\Utils\Url::getParameter('error_id');
$errorID = intval($errorID);

switch ($errorID) {
    case 8:
         // configuration error
        list($errorTitle, $errorMessage) = array("Configuration Error", 'The site name is not set in configuration verb CUSTOM_CFG_Accel_' . 'Ext_Integrations');
        break;
    case 9:
        // invalid i_id
        list($errorTitle, $errorMessage) = array("Permission Denied", "An illegal value was received for the parameter 'i_id'");
        break;
    case 10:
         // invalid sr_id
        list($errorTitle, $errorMessage) = array("Permission Denied", "An illegal value was received for the parameter 'sr_id'");
        break;
    case 11:
         // EBS server error
        list($errorTitle, $errorMessage) = array("EBS Server Error", "There has been an error communicating with EBS");
        break;
    case 12:
        // contact_party_id and/or contact_org_id not provided
        list($errorTitle, $errorMessage) = array("Permission Denied", "Please set EBS Contact Party ID and/or EBS Contact Org ID first.");
        break;
    case 13:
         // configuration error
        list($errorTitle, $errorMessage) = array("Configuration Error", 'Invalid configuration setting for CUSTOM_CFG_Accel_' . 'Ext_Integrations');
        break;
    default:
        list($errorTitle, $errorMessage) = \RightNow\Utils\Framework::getErrorMessageFromCode($errorID);
        break;
}
?>
<div class="rn_Hero">
    <div class="rn_Container">
        <h1><?=$errorTitle;?></h1>
    </div>
</div>
<div class="rn_PageContent rn_ErrorPage rn_Container">
    <p><?=$errorMessage;?></p>
</div>
