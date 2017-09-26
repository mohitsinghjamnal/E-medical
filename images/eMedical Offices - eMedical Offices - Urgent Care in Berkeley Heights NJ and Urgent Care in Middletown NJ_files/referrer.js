var EI = window.EI || {}

// Site Visitor Information
//
// Author:  Andrew Waer
// Date:    December 2009
// 

// Referrer class
// 
// Encapsulates document referrer information
// 
EI.Referrer = function() {
  var _referrer = document.referrer;

  this.hostname = function() {
    return _referrer.replace(/(http:\/\/|www\.|\/.*$)/g,'');
  }
  this.toString = function() {
    return _referrer;
  }
}

// ReferrerMadness core javascript
// 
// Requires: EI.Referrer
// 
// This namespace manages cookie storage and form submission of referrer info.
// A hidden input holding the referrer value is appended to each form element.
// 
EI.ReferrerMadness = function() {
  var _cookie_name   = '_ei_referrer';
  var _referrer      = new EI.Referrer;
  var _cookie        = getCookie(_cookie_name);
  var _last_referrer = _cookie || '';
  var _hostname      = document.location.hostname.replace('www.','');
  var _forms;

  function isNewReferrer() {
    if (_referrer.hostname() == '' || _referrer.hostname() == _hostname)
      return false;
    return (_last_referrer != _referrer);
  }

  function storeNewReferrer() {
    setCookie(_cookie_name, _referrer, 0, '/');
    _cookie = getCookie(_cookie_name);
  }

  function getCookie(name) {
    var start = document.cookie.indexOf(name + "=");
    var len = start + name.length + 1;
    if ((!start) && (name != document.cookie.substring(0, name.length))) {
      return '';
    }
    if (start == -1) return '';
    var end = document.cookie.indexOf(';', len);
    if (end == -1) end = document.cookie.length;
    return unescape(document.cookie.substring(len, end));
  }

  function setCookie(name, value, expires, path, domain, secure) {
    var today = new Date();
    today.setTime(today.getTime());
    if (expires) {
      expires = expires * 1000 * 60 * 60 * 24;
    }
    var expires_date = new Date( today.getTime() + (expires) );
    document.cookie = name + '=' + escape(value) +
      ((expires) ? ';expires=' + expires_date.toGMTString() : '') +
      ((path) ? ';path=' + path : '') +
      ((domain) ? ';domain=' + domain : '') +
      ((secure) ? ';secure' : '');
  }

  function insertReferrerFieldToForms() {
    for (var i=0; i<_forms.length; i++) {
      var input = document.createElement('input');
      input.setAttribute('type', 'hidden');
      input.setAttribute('name', 'referrer_url');
      input.setAttribute('value', _cookie);
      _forms[i].appendChild(input);
    }
  }

  function initialize() {
    _forms = document.getElementsByTagName('form');
    if (isNewReferrer()) storeNewReferrer();
    if (_forms) insertReferrerFieldToForms();
  }

  function addLoadEvent(func) {
    var oldonload = window.onload;
    if (typeof window.onload != 'function') {
      window.onload = func;
    } else {
      window.onload = function() {
        if (oldonload) {
          oldonload();
        }
        func();
      }
    }
  }

  addLoadEvent(initialize);

}();