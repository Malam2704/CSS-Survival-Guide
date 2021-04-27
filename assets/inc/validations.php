<?php
//functions for checking values - all will return 0 if false, 1 if true
function alphaNumeric($value) {
	$reg= "/^[A-Za-z0-9]+$/";
	return preg_match($reg,$value);
}

function alphaNumericSpace($value) {
	$reg = "/^[A-Za-z0-9 ]+$/";
	return preg_match($reg,$value);
}

function alphaNumericSpacePunctuation($value) {
	$reg = '/^[A-Za-z0-9 !-~]+$/';
	return preg_match($reg,$value);
}

// 5 | 5.5 | 0.5
function numeric($value) {
	$reg = "/(^-?\d\d*\.\d*$)|(^-?\d\d*$)|(^-?\.\d\d*$)/";
	return preg_match($reg,$value);
}

function integer($value) {
	$reg = "/(^-?\d\d*$)/";
	return preg_match($reg,$value);
}

// 5.5
function decimal($value) {
	$reg = "/^[0-9]*\.[0-9]+$/";
	return preg_match($reg,$value);
}

function alphabetic($value) {
	$reg = "/^[A-Za-z]+$/";
	return preg_match($reg,$value);
}

function alphabeticSpace($value) {
	$reg = "/^[A-Za-z ]+$/";
	return preg_match($reg,$value);
}

function emailCheck($value) {
	$reg = "/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/";
	return preg_match($reg,$value);
}

function ssNum($value) {
	$reg = "/^\d{3}\-?\d{2}\-?\d{4}$/";
	return preg_match($reg,$value);
}

function dollarAmount($value) {
	$reg = "/^((\$\d*)|(\$\d*\.\d{2})|(\d*)|(\d*\.\d{2}))$/";
	return preg_match($reg,$value);
}

//Validates that a string a US zip code in 5 digit format or zip+4 format. 99999 or 99999-9999
function zipCode($value) {
	$reg = "/(^\d{5}$)|(^\d{5}-\d{4}$)/";
	return preg_match($reg,$value);
}

function state($value) {
	$reg = "/^(?-i:A[LKSZRAEP]|C[AOT]|D[EC]|F[LM]|G[AU]|HI|I[ADLN]|K[SY]|LA|M[ADEHINOPST]|N[CDEHJMVY]|O[HKR]|P[ARW]|RI|S[CD]|T[NX]|UT|V[AIT]|W[AIVY])$/";
	return preg_match($reg,$value);
}

//(999) 999-9999 or (999)999-9999
function phoneNum($value) {
	$reg = "/^\([1-9]\d{2}\)\s?\d{3}\-\d{4}$/";
	return preg_match($reg,$value);
}

//date including leap years since 1900 mm and dd could have 1 or 2 digits with 4 digit year and / separator
function dateValidation($value) {
	$reg = "/^(((0?[1-9]|1[012])\/(0?[1-9]|1\d|2[0-8])|(0?[13456789]|1[012])\/(29|30)|(0?[13578]|1[02])\/31)\/(19|[2-9]\d)\d{2}|0?2\/29\/((19|[2-9]\d)(0[48]|[2468][048]|[13579][26])|(([2468][048]|[3579][26])00)))$/";
	return preg_match($reg,$value);
}

//Date with leap years. Accepts '.' '-' and '/' as separators d.m.yy to dd.mm.yyyy (or d.mm.yy, etc) 
//Ex: dd-mm-yyyy d.mm/yy dd/m.yyyy etc etc Accept 00 years also.
function dateAlternate($value) {
    $reg = "/^((((0?[1-9]|[12]\d|3[01])[\.\-\/](0?[13578]|1[02])[\.\-\/]((1[6-9]|[2-9]\d)?\d{2}))|((0?[1-9]|[12]\d|30)[\.\-\/](0?[13456789]|1[012])[\.\-\/]((1[6-9]|[2-9]\d)?\d{2}))|((0?[1-9]|1\d|2[0-8])[\.\-\/]0?2[\.\-\/]((1[6-9]|[2-9]\d)?\d{2}))|(29[\.\-\/]0?2[\.\-\/]((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)|00)))|(((0[1-9]|[12]\d|3[01])(0[13578]|1[02])((1[6-9]|[2-9]\d)?\d{2}))|((0[1-9]|[12]\d|30)(0[13456789]|1[012])((1[6-9]|[2-9]\d)?\d{2}))|((0[1-9]|1\d|2[0-8])02((1[6-9]|[2-9]\d)?\d{2}))|(2902((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)|00))))$/";
	return preg_match($reg,$value);
}
    
// mm/dd/yyyy format
function date1($value) { 
	$reg = "/(0[1-9]|1[012])[- \/.](0[1-9]|[12][0-9]|3[01])[- \/.](19|20)\d\d/";
	return preg_match($reg,$value);
}

// mm-dd-yyyy
function date2($value) {
	$reg = "/(0[1-9]|[12][0-9]|3[01])[- \/.](0[1-9]|1[012])[- \/.](19|20)\d\d/";
	return preg_match($reg,$value);
}

function visa($value) {
    $reg = "/^4[0-9]{12}(?:[0-9]{3})?$/";
	return preg_match($reg,$value);
}

function mc($value) {
    $reg = "/^5[1-5][0-9]{14}$/";
	return preg_match($reg,$value);
}

function americanExpress($value) {
    $reg = "/^3[47][0-9]{13}$/";
	return preg_match($reg,$value);
}

function dinersClub($value) {
    $reg = "/^3(?:0[0-5]|[68][0-9])[0-9]{11}$/";
	return preg_match($reg,$value);
}

function discover($value) {
    $reg = "/^6(?:011|5[0-9]{2})[0-9]{12}$/";
	return preg_match($reg,$value);
}

function creditCard($value) {
    $reg = "/^(?:4[0-9]{12}(?:[0-9]{3})?|5[1-5][0-9]{14}|6(?:011|5[0-9][0-9])[0-9]{12}|3[47][0-9]{13}|3(?:0[0-5]|[68][0-9])[0-9]{11}|(?:2131|1800|35\d{3})\d{11})$/";
	return preg_match($reg,$value);
}

?>