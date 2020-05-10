(function ($) {
    $.fn.serializeFormJSON = function () {

        var o = {};
        var a = this.serializeArray();
        $.each(a, function () {
            if (o[this.name]) {
                if (!o[this.name].push) {
                    o[this.name] = [o[this.name]];
                }
                o[this.name].push($.trim(this.value) || '');
            } else {
                o[this.name] = $.trim(this.value) || '';
            }
        });
        return o;
    };
})(jQuery);
function datePicker() {
    $('.date_picker').datetimepicker();
    datePickerRestriction();
}
function datePickerRestriction() {
    $('.date_picker').keyup(function (e) {
        e = e || window.event; //for pre-IE9 browsers, where the event isn't passed to the handler function
        if (e.keyCode == '37' || e.which == '37' || e.keyCode == '39' || e.which == '39') {
            var message = ' ' + $('.ui-state-hover').html() + ' ' + $('.ui-datepicker-month').html() + ' ' + $('.ui-datepicker-year').html();
            if ($(this).attr('id') == 'startDate') {
                $(".date_picker").val(message);
            }
        }
    });
}
function validateEmail(sEmail) {
    var filter = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
    if (filter.test(sEmail)) {
        return true;
    } else {
        return false;
    }
}

$(document).ready(function () {
    setCaptchaCode();
});
function setCaptchaCode() {
    var captchaCode = generateCaptcha();
    $('#captcha_container').html(captchaCode);
    $('#captcha_code').val(captchaCode);
    $('#captcha_code_varification').val('');
}

function generateCaptcha() {
    var text = "";
    var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
    for (var i = 0; i < 6; i++)
        text += possible.charAt(Math.floor(Math.random() * possible.length));
    return text;
}

function getBasicMessageAndFieldJSONArray(field, message) {
    var returnData = {};
    returnData['message'] = message;
    returnData['field'] = field;
    return returnData;
}

function renderOptionsForTwoDimensionalArray(dataArray, comboId, msgName) {
    if (!dataArray) {
        return false;
    }
    $('#' + comboId).html('<option value="">Select ' + msgName + '</option>');
    var data = {};
    var optionResult = "";
    $.each(dataArray, function (index, dataObject) {
        data = {"value_field": index, 'text_field': dataObject};
        optionResult = optionTemplate(data);
        $("#" + comboId).append(optionResult);
    });
}

/**
 * This Function Is Used To Create Dynamic Combo Box Pass Data And KeyId And Value Id And combo Id
 * @param {type} dataArray
 * @param {type} comboId
 * @param {type} keyId
 * @param {type} valueId
 * @returns {Boolean}
 */
function renderOptionsForTwoDimensionalArrayWithKeyValue(dataArray, comboId, keyId, valueId, addBlankOption) {
    if (!dataArray) {
        return false;
    }
    if (typeof addBlankOption === "undefined") {
        addBlankOption = true;
    }
    if (addBlankOption) {
        $('#' + comboId).html('<option value="">&nbsp;</option>');
    }
    var data = {};
    var optionResult = "";
    var textField = "";
    $.each(dataArray, function (index, dataObject) {
        if (dataObject != undefined) {
            textField = dataObject[valueId];
            data = {"value_field": dataObject[keyId], 'text_field': textField};
            optionResult = optionTemplate(data);
            $("#" + comboId).append(optionResult);
        }
    });
}


function checkMobileNumber(obj) {
    var mobileNumber = obj.val();
    var mobileNumberValidationMessage = mobileNumberValidation(mobileNumber);
    if (mobileNumberValidationMessage != '') {
        showError(mobileNumberValidationMessage);
        return false;
    }
}

function mobileNumberValidation(mobileNumber) {
    if (!mobileNumber) {
        return '';
    }
    var filter = /^[0-9-+]+$/;
    if (mobileNumber.length != 10 || !filter.test(mobileNumber)) {
        return 'Invalid mobile number.';
    }
    return '';
}

function checkEmailId(obj, isExisting) {
    var emailId = obj.val();
    var emailIdValidationMessage = emailIdValidation(emailId);
    if (emailIdValidationMessage != '') {
        showError(emailIdValidationMessage);
        return false;
    }
    if (isExisting) {
        checkEmailIdExists(obj);
    }
}

function emailIdValidation(emailId) {
    if (!emailId) {
        return '';
    }
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if (!filter.test(emailId)) {
        return 'Invalid Email Id.';
    }
    return '';
}

function checkPAN(obj) {
    var PAN = obj.val();
    var PANValidationMessage = PANValidation(PAN);
    if (PANValidationMessage != '') {
        showError(PANValidationMessage);
        return false;
    }
}

function PANValidation(PAN) {
    if (!PAN) {
        return '';
    }
    if (!panRegex.test(PAN)) {
        return 'Invalid PAN';
    }
    return '';
}

function checkPincode(obj) {
    var pincode = obj.val();
    var pincodeValidationMessage = pincodeValidation(pincode);
    if (pincodeValidationMessage != '') {
        showError(pincodeValidationMessage);
        return false;
    }
}

function pincodeValidation(pincode) {
    if (!pincode) {
        return '';
    }
    var regex = /^[1-9][0-9]{5}$/;
    if (!regex.test(pincode)) {
        return 'Invalid Pincode';
    }
    return '';
}

function checkPassword(obj) {
    var password = obj.val();
    var passwordValidationMessage = passwordValidation(password);
    if (passwordValidationMessage != '') {
        showError(passwordValidationMessage);
        return false;
    }
}

function passwordValidation(password) {
    if (!password) {
        return '';
    }
    var regex = new RegExp(passwordRegex);
    if (!regex.test(password)) {
        return passwordValidationMessage;
    }
    return '';
}

function dateTo_DD_MM_YYYY(date, delimeter) {
    var delim = delimeter ? delimeter : '-';
    var d = new Date(date || Date.now()),
            month = d.getMonth() + 1,
            day = '' + d.getDate(),
            year = d.getFullYear();
    if (month < 10)
        month = '0' + month;
    if (day.length < 2)
        day = '0' + day;
    return [day, month, year].join(delim);
}

function dateTo_YYYY_MM_DD(date, delimeter) {
    date = new Date(date);
    var delim = delimeter ? delimeter : '-';
    var month = date.getMonth() + 1;
    var day = date.getDate();
    return date.getFullYear() + delim + (month < 10 ? '0' : '') + month + delim + (day < 10 ? '0' : '') + day;
}

function checkUserNameIsExists(obj) {
    var username = obj.val();
    if (!username) {
        return false;
    }
    $.ajax({
        type: 'POST',
        url: "check_username_is_exists",
        data: {'username': username},
        error: function (textStatus, errorThrown) {
            showError('Some unexpected database error encountered due to which your transaction could not be completed');
        },
        success: function (data) {
            var parseData = JSON.parse(data);
            if (parseData.success == false) {
                showError(parseData.message);
                return false;
            }
            showSuccess(parseData.message);
        }
    });
}
function checkEmailIdExists(obj) {
    var emailId = obj.val();
    if (!emailId) {
        return false;
    }
    $.ajax({
        type: 'POST',
        url: "check_email_id_is_exists",
        data: {'email_id': emailId},
        error: function (textStatus, errorThrown) {
            showError('Some unexpected database error encountered due to which your transaction could not be completed');
        },
        success: function (data) {
            var parseData = JSON.parse(data);
            if (parseData.success == false) {
                showError(parseData.message);
                return false;
            }
        }
    });
}

function checkNumeric(obj) {
    if (!$.isNumeric(obj.val())) {
        obj.val("");
    }
}

function roundOff(obj) {
    var amount = obj.val();
    if ($.isNumeric(amount)) {
        obj.val(parseFloat(Math.abs(amount)).toFixed(2));
    }
}

function checkNumericWithRoundOffWithoutPoints(obj) {
    if (!$.isNumeric(obj.val())) {
        obj.val("");
        return;
    }
    obj.val(Math.round(Math.abs(obj.val())));
}

function imageUploadValidation(imageUploadAttrId, message, isValidateFileSize) {
    var allowedFiles = ['.jpg', '.png', '.jpeg','.JPEG','.JPG','.PNG'];
    var imageName = $('#' + imageUploadAttrId).val();
    var regex = new RegExp('([a-zA-Z0-9\s_\\.\-:])+(' + allowedFiles.join('|') + ')$');
    if (!regex.test(imageName.toLowerCase())) {
        showError(message + ' <b>' + allowedFiles.join(', ') + '</b> only.');
        return true;
    }
    if (isValidateFileSize) {
        if (($('#seal_and_stamp_with_signature')[0].files[0].size / 1204) > maxFileSizeInKb) {
            showError('Maximum upload size ' + maxFileSizeInKb + 'kb only.');
            return true;
        }
    }
    return false;
}

function messagesForm(title, message) {
    if (!title || !message) {
        return false;
    }
    $('#title').val(title);
    $('#message').val(message);
    $('#message_form').submit();
}

function ddmmyyToDate(dateString, delimeter) {
    var delim = delimeter ? delimeter : '-';
    var dateParts = dateString.split(delim);
    return new Date(dateParts[2], dateParts[1] - 1, dateParts[0]); // Note: months are 0-based
}

function checkValidationForUser(userFormData, isUpdate, isUser) {
    if (!userFormData.first_name) {
        return getBasicMessageAndFieldJSONArray('first_name', 'Enter First Name.');
    }
    if (!userFormData.last_name) {
        return getBasicMessageAndFieldJSONArray('last_name', 'Enter Last Name.');
    }
    if (!userFormData.mobile_number) {
        return getBasicMessageAndFieldJSONArray('mobile_number', 'Enter Mobile Number.');
    }
    var mobileNumberValidationMessage = mobileNumberValidation(userFormData.mobile_number);
    if (mobileNumberValidationMessage != '') {
        return getBasicMessageAndFieldJSONArray('mobile_number', mobileNumberValidationMessage);
    }
    
        if (!userFormData.registration_category) {
            return getBasicMessageAndFieldJSONArray('registration_category', 'Select Any Type of Work.');
        }

    if (!isUpdate) {
        if (!userFormData.email_id) {
            return getBasicMessageAndFieldJSONArray('email_id', 'Enter Email Id.');
        }
        var emailIdValidationMessage = emailIdValidation(userFormData.email_id);
        if (emailIdValidationMessage != '') {
            return getBasicMessageAndFieldJSONArray('email_id', emailIdValidationMessage);
        }
    }
    // if (!userFormData.pan) {
    //     return getBasicMessageAndFieldJSONArray('pan', 'Enter PAN.');
    // }
    if (userFormData.pan) {
        var panValidationMessage = PANValidation(userFormData.pan);
        if (panValidationMessage != '') {
            return getBasicMessageAndFieldJSONArray('pan', panValidationMessage);
        }
    }
    if (!userFormData.address) {
        return getBasicMessageAndFieldJSONArray('address', 'Enter Address.');
    }
    if (!isUpdate) {
        if (!userFormData.username) {
            return getBasicMessageAndFieldJSONArray('username', 'Enter User Name.');
        }
        if (!userFormData.password) {
            return getBasicMessageAndFieldJSONArray('password', 'Enter Password.');
        }
        var passwordValidationMessage = passwordValidation(userFormData.password);
        if (passwordValidationMessage != '') {
            return getBasicMessageAndFieldJSONArray('password', passwordValidationMessage);
        }
        if (!userFormData.confirm_password) {
            return getBasicMessageAndFieldJSONArray('confirm_password', 'Enter Retype Password.');
        }
        if (userFormData.password != userFormData.confirm_password) {
            return getBasicMessageAndFieldJSONArray('confirm_password', 'Password and Retype Password Not Matched.');
        }
        if (!userFormData.captcha_code_varification) {
            return getBasicMessageAndFieldJSONArray('captcha_code_varification', 'Enter Captcha Code.');
        }
        if ((userFormData.captcha_code_varification).trim() != (userFormData.captcha_code).trim()) {
            return getBasicMessageAndFieldJSONArray('captcha_code_varification', 'Captcha Not Matched.');
        }
    }
    return '';
}

var orderTypeRenderer = function (data, type, full, meta) {
    return orderTypeArray[data] ? orderTypeArray[data] : '';
};
var dateRenderer = function (data, type, full, meta) {
    return dateTo_DD_MM_YYYY(data);
};
var statusRenderer = function (data, type, full, meta) {
    var color = '';
    if (data == foodOrderStatusPending) {
        color = 'primary';
    } else if (data == foodOrderStatusProcessing) {
        color = 'warning';
    } else if (data == foodOrderStatusDelivered) {
        color = 'success';
    } else {
        color = 'danger';
    }
    return '<span class="label label-lg label-' + color + '">' + foodOrderStatusArray[data] + '</span>';
};


function startDateNotGreaterEndDate(startDate, endDate) {
    var tempStartDate = new Date(startDate);
    var tempEndDate = new Date(endDate);
    if (tempStartDate < tempEndDate) {
        return 'Must be greater than From Date.';
    }
    return '';
}

function login(btnObj) {
    var login_username = $('#login_username').val();
    var login_password = $('#login_password').val();
   
    if (!login_username) {
        showError('Enter User Name.');
        $('#login_username').focus();
        return false;
    }
    if (!login_password) {
        showError('Enter Password.');
        $('#login_password').focus();
        return false;
    }

    btnObj.html('Processing..');
    btnObj.attr('onclick', '');
    $.ajax({
        type: 'POST',
        url: baseUrl + 'login/check_login',
        data: {'login_username': login_username, 'login_password': login_password},
        error: function (textStatus, errorThrown) {
            btnObj.html('Sign In');
            btnObj.attr('onclick', 'login($(this))');
            showError('Some unexpected database error encountered due to which your transaction could not be completed');
        },
        success: function (data) {
            var parseData = JSON.parse(data);
            if (parseData.success == false) {
                btnObj.html('Sign In');
                btnObj.attr('onclick', 'login($(this))');
                showError(parseData.message);
                return false;
            } else
            if (parseData.success == true) {
                window.location = baseUrl + 'main';
            }

        }
    });
}