<?php
class edit extends ca_customers{

    function edit($istanza){

        // Customer_ID
        $istanza->Customer_ID->EditAttrs["class"] = "form-control";
        $istanza->Customer_ID->EditCustomAttributes = "";
        $istanza->Customer_ID->EditValue = ew_HtmlEncode($istanza->Customer_ID->AdvancedSearch->SearchValue);
        $istanza->Customer_ID->PlaceHolder = ew_RemoveHtml($istanza->Customer_ID->FldCaption());
        $istanza->Customer_ID->EditAttrs["class"] = "form-control";
        $istanza->Customer_ID->EditCustomAttributes = "";
        $istanza->Customer_ID->EditValue2 = ew_HtmlEncode($istanza->Customer_ID->AdvancedSearch->SearchValue2);
        $istanza->Customer_ID->PlaceHolder = ew_RemoveHtml($istanza->Customer_ID->FldCaption());

        // Customer_Number
        $istanza->Customer_Number->EditAttrs["class"] = "form-control";
        $istanza->Customer_Number->EditCustomAttributes = "";
        $istanza->Customer_Number->EditValue = ew_HtmlEncode($istanza->Customer_Number->AdvancedSearch->SearchValue);
        $istanza->Customer_Number->PlaceHolder = ew_RemoveHtml($istanza->Customer_Number->FldCaption());
        $istanza->Customer_Number->EditAttrs["class"] = "form-control";
        $istanza->Customer_Number->EditCustomAttributes = "";
        $istanza->Customer_Number->EditValue2 = ew_HtmlEncode($istanza->Customer_Number->AdvancedSearch->SearchValue2);
        $istanza->Customer_Number->PlaceHolder = ew_RemoveHtml($istanza->Customer_Number->FldCaption());

        // Customer_Name
        $istanza->Customer_Name->EditAttrs["class"] = "form-control";
        $istanza->Customer_Name->EditCustomAttributes = "";
        $istanza->Customer_Name->EditValue = ew_HtmlEncode($istanza->Customer_Name->AdvancedSearch->SearchValue);
        $istanza->Customer_Name->PlaceHolder = ew_RemoveHtml($istanza->Customer_Name->FldCaption());
        $istanza->Customer_Name->EditAttrs["class"] = "form-control";
        $istanza->Customer_Name->EditCustomAttributes = "";
        $istanza->Customer_Name->EditValue2 = ew_HtmlEncode($istanza->Customer_Name->AdvancedSearch->SearchValue2);
        $istanza->Customer_Name->PlaceHolder = ew_RemoveHtml($istanza->Customer_Name->FldCaption());

        // Address
        $istanza->Address->EditAttrs["class"] = "form-control";
        $istanza->Address->EditCustomAttributes = "";
        $istanza->Address->EditValue = ew_HtmlEncode($istanza->Address->AdvancedSearch->SearchValue);
        $istanza->Address->PlaceHolder = ew_RemoveHtml($istanza->Address->FldCaption());
        $istanza->Address->EditAttrs["class"] = "form-control";
        $istanza->Address->EditCustomAttributes = "";
        $istanza->Address->EditValue2 = ew_HtmlEncode($istanza->Address->AdvancedSearch->SearchValue2);
        $istanza->Address->PlaceHolder = ew_RemoveHtml($istanza->Address->FldCaption());

        // City
        $istanza->City->EditAttrs["class"] = "form-control";
        $istanza->City->EditCustomAttributes = "";
        $istanza->City->EditValue = ew_HtmlEncode($istanza->City->AdvancedSearch->SearchValue);
        $istanza->City->PlaceHolder = ew_RemoveHtml($istanza->City->FldCaption());
        $istanza->City->EditAttrs["class"] = "form-control";
        $istanza->City->EditCustomAttributes = "";
        $istanza->City->EditValue2 = ew_HtmlEncode($istanza->City->AdvancedSearch->SearchValue2);
        $istanza->City->PlaceHolder = ew_RemoveHtml($istanza->City->FldCaption());

        // Country
        $istanza->Country->EditAttrs["class"] = "form-control";
        $istanza->Country->EditCustomAttributes = "";
        $istanza->Country->EditValue = ew_HtmlEncode($istanza->Country->AdvancedSearch->SearchValue);
        $istanza->Country->PlaceHolder = ew_RemoveHtml($istanza->Country->FldCaption());
        $istanza->Country->EditAttrs["class"] = "form-control";
        $istanza->Country->EditCustomAttributes = "";
        $istanza->Country->EditValue2 = ew_HtmlEncode($istanza->Country->AdvancedSearch->SearchValue2);
        $istanza->Country->PlaceHolder = ew_RemoveHtml($istanza->Country->FldCaption());

        // Contact_Person
        $istanza->Contact_Person->EditAttrs["class"] = "form-control";
        $istanza->Contact_Person->EditCustomAttributes = "";
        $istanza->Contact_Person->EditValue = ew_HtmlEncode($istanza->Contact_Person->AdvancedSearch->SearchValue);
        $istanza->Contact_Person->PlaceHolder = ew_RemoveHtml($istanza->Contact_Person->FldCaption());
        $istanza->Contact_Person->EditAttrs["class"] = "form-control";
        $istanza->Contact_Person->EditCustomAttributes = "";
        $istanza->Contact_Person->EditValue2 = ew_HtmlEncode($istanza->Contact_Person->AdvancedSearch->SearchValue2);
        $istanza->Contact_Person->PlaceHolder = ew_RemoveHtml($istanza->Contact_Person->FldCaption());

        // Phone_Number
        $istanza->Phone_Number->EditAttrs["class"] = "form-control";
        $istanza->Phone_Number->EditCustomAttributes = "";
        $istanza->Phone_Number->EditValue = ew_HtmlEncode($istanza->Phone_Number->AdvancedSearch->SearchValue);
        $istanza->Phone_Number->PlaceHolder = ew_RemoveHtml($istanza->Phone_Number->FldCaption());
        $istanza->Phone_Number->EditAttrs["class"] = "form-control";
        $istanza->Phone_Number->EditCustomAttributes = "";
        $istanza->Phone_Number->EditValue2 = ew_HtmlEncode($istanza->Phone_Number->AdvancedSearch->SearchValue2);
        $istanza->Phone_Number->PlaceHolder = ew_RemoveHtml($istanza->Phone_Number->FldCaption());

        // Email
        $istanza->_Email->EditAttrs["class"] = "form-control";
        $istanza->_Email->EditCustomAttributes = "";
        $istanza->_Email->EditValue = ew_HtmlEncode($istanza->_Email->AdvancedSearch->SearchValue);
        $istanza->_Email->PlaceHolder = ew_RemoveHtml($istanza->_Email->FldCaption());
        $istanza->_Email->EditAttrs["class"] = "form-control";
        $istanza->_Email->EditCustomAttributes = "";
        $istanza->_Email->EditValue2 = ew_HtmlEncode($istanza->_Email->AdvancedSearch->SearchValue2);
        $istanza->_Email->PlaceHolder = ew_RemoveHtml($istanza->_Email->FldCaption());

        // Mobile_Number
        $istanza->Mobile_Number->EditAttrs["class"] = "form-control";
        $istanza->Mobile_Number->EditCustomAttributes = "";
        $istanza->Mobile_Number->EditValue = ew_HtmlEncode($istanza->Mobile_Number->AdvancedSearch->SearchValue);
        $istanza->Mobile_Number->PlaceHolder = ew_RemoveHtml($istanza->Mobile_Number->FldCaption());
        $istanza->Mobile_Number->EditAttrs["class"] = "form-control";
        $istanza->Mobile_Number->EditCustomAttributes = "";
        $istanza->Mobile_Number->EditValue2 = ew_HtmlEncode($istanza->Mobile_Number->AdvancedSearch->SearchValue2);
        $istanza->Mobile_Number->PlaceHolder = ew_RemoveHtml($istanza->Mobile_Number->FldCaption());

        // Notes
        $istanza->Notes->EditAttrs["class"] = "form-control";
        $istanza->Notes->EditCustomAttributes = "";
        $istanza->Notes->EditValue = ew_HtmlEncode($istanza->Notes->AdvancedSearch->SearchValue);
        $istanza->Notes->PlaceHolder = ew_RemoveHtml($istanza->Notes->FldCaption());
        $istanza->Notes->EditAttrs["class"] = "form-control";
        $istanza->Notes->EditCustomAttributes = "";
        $istanza->Notes->EditValue2 = ew_HtmlEncode($istanza->Notes->AdvancedSearch->SearchValue2);
        $istanza->Notes->PlaceHolder = ew_RemoveHtml($istanza->Notes->FldCaption());

        // Balance
        $istanza->Balance->EditAttrs["class"] = "form-control";
        $istanza->Balance->EditCustomAttributes = "";
        $istanza->Balance->EditValue = ew_HtmlEncode($istanza->Balance->AdvancedSearch->SearchValue);
        $istanza->Balance->PlaceHolder = ew_RemoveHtml($istanza->Balance->FldCaption());
        $istanza->Balance->EditAttrs["class"] = "form-control";
        $istanza->Balance->EditCustomAttributes = "";
        $istanza->Balance->EditValue2 = ew_HtmlEncode($istanza->Balance->AdvancedSearch->SearchValue2);
        $istanza->Balance->PlaceHolder = ew_RemoveHtml($istanza->Balance->FldCaption());

        // Date_Added
        $istanza->Date_Added->EditAttrs["class"] = "form-control";
        $istanza->Date_Added->EditCustomAttributes = "";
        $istanza->Date_Added->EditValue = ew_HtmlEncode(ew_UnFormatDateTime($istanza->Date_Added->AdvancedSearch->SearchValue, 0));
        $istanza->Date_Added->PlaceHolder = ew_RemoveHtml($istanza->Date_Added->FldCaption());
        $istanza->Date_Added->EditAttrs["class"] = "form-control";
        $istanza->Date_Added->EditCustomAttributes = "";
        $istanza->Date_Added->EditValue2 = ew_HtmlEncode(ew_UnFormatDateTime($istanza->Date_Added->AdvancedSearch->SearchValue2, 0));
        $istanza->Date_Added->PlaceHolder = ew_RemoveHtml($istanza->Date_Added->FldCaption());

        // Added_By
        $istanza->Added_By->EditAttrs["class"] = "form-control";
        $istanza->Added_By->EditCustomAttributes = "";
        $istanza->Added_By->EditValue = ew_HtmlEncode($istanza->Added_By->AdvancedSearch->SearchValue);
        $istanza->Added_By->PlaceHolder = ew_RemoveHtml($istanza->Added_By->FldCaption());
        $istanza->Added_By->EditAttrs["class"] = "form-control";
        $istanza->Added_By->EditCustomAttributes = "";
        $istanza->Added_By->EditValue2 = ew_HtmlEncode($istanza->Added_By->AdvancedSearch->SearchValue2);
        $istanza->Added_By->PlaceHolder = ew_RemoveHtml($istanza->Added_By->FldCaption());

        // Date_Updated
        $istanza->Date_Updated->EditAttrs["class"] = "form-control";
        $istanza->Date_Updated->EditCustomAttributes = "";
        $istanza->Date_Updated->EditValue = ew_HtmlEncode(ew_UnFormatDateTime($istanza->Date_Updated->AdvancedSearch->SearchValue, 0));
        $istanza->Date_Updated->PlaceHolder = ew_RemoveHtml($istanza->Date_Updated->FldCaption());
        $istanza->Date_Updated->EditAttrs["class"] = "form-control";
        $istanza->Date_Updated->EditCustomAttributes = "";
        $istanza->Date_Updated->EditValue2 = ew_HtmlEncode(ew_UnFormatDateTime($istanza->Date_Updated->AdvancedSearch->SearchValue2, 0));
        $istanza->Date_Updated->PlaceHolder = ew_RemoveHtml($istanza->Date_Updated->FldCaption());

        // Updated_By
        $istanza->Updated_By->EditAttrs["class"] = "form-control";
        $istanza->Updated_By->EditCustomAttributes = "";
        $istanza->Updated_By->EditValue = ew_HtmlEncode($istanza->Updated_By->AdvancedSearch->SearchValue);
        $istanza->Updated_By->PlaceHolder = ew_RemoveHtml($istanza->Updated_By->FldCaption());
        $istanza->Updated_By->EditAttrs["class"] = "form-control";
        $istanza->Updated_By->EditCustomAttributes = "";
        $istanza->Updated_By->EditValue2 = ew_HtmlEncode($istanza->Updated_By->AdvancedSearch->SearchValue2);
        $istanza->Updated_By->PlaceHolder = ew_RemoveHtml($istanza->Updated_By->FldCaption());
    }
}
?>