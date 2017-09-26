
//Load Web App JavaScript Dependencies/Plugins
define([
    "jquery",
    "modernizr",
    "underscore",
    "backbone",
    "bootstrap",
    "plugins"
], function($)
{
    $(document).ready(function()
    {

        //do stuff
       // console.log('required plugins loaded...');

        //jQuery Captcha Validation

        WEBAPP = {

            settings: {},
            cache: {},

            init: function() {

                //DOM cache
                this.cache.$form = $('#contact-quick');
                this.cache.$refreshCaptcha = $('#refresh-captcha');
                this.cache.$captchaImg = $('img#captcha');
                this.cache.$captchaInput = $(':input[name="captcha"]');
				
				//DOM Cache for Patient Survey form
				this.cache.$formSurvey = $('#patient_survey_form');
                this.cache.$refreshCaptchaSurvey = $('#patient_survey_refresh_captcha');
                this.cache.$captchaImgSurvey = $('img#patient_survey_captcha');
                this.cache.$captchaInputSurvey = $(':input[name="patient_survey_captcha"]');

                this.eventHandlers();
                this.setupValidation();

            },

            eventHandlers: function() {

                //generate new captcha
                WEBAPP.cache.$refreshCaptcha.on('click', function(e)
                {
                    WEBAPP.cache.$captchaImg.attr("src","uploads/captcha/php/newCaptcha.php?rnd=" + Math.random());
                });
				WEBAPP.cache.$refreshCaptchaSurvey.on('click', function(e)
                {
                    WEBAPP.cache.$captchaImgSurvey.attr("src","uploads/captcha/php/newCaptchaSurvey.php?rnd=" + Math.random());
                });
            },

            setupValidation: function()
            {

                WEBAPP.cache.$form.validate({
                   onkeyup: false,
                   rules: {
                        "contact_name": {
                            "required": true
                        },
                        "contact_email": {
                            "required": true
                        },
                        "contact_phone": {
                            "required": true
                        },
						"formname": {
                            "required": true
                        },
                        "captcha": {
                            "required": true,
                            "remote" :
                            {
                              url: 'uploads/captcha/php/checkCaptcha.php',
                              type: "post",
                              data:
                              {
                                  code: function()
                                  {
                                      return WEBAPP.cache.$captchaInput.val();
                                  }
                              }
                            }
                        }
                    },
                    messages: {
                        "contact_name": "Please enter your name.",
                        "contact_email": {
                            "required": "Please enter your email address.",
                            "email": "Please enter a valid email address."
                        },
						"contact_phone": {
							"required" :"Please enter your phone number.",
                            "number": "Please enter a valid phone number."
						},
						"formname": "Please select location.",
                        "captcha": {
                            "required": "Please enter the verification code.",
                            "remote": "Verification code is incorrect, please try again."
                        }
                    },
                    submitHandler: function(form)
                    {
                        /* -------- AJAX SUBMIT ----------------------------------------------------- */

                        var submitRequest = $.ajax({
                             type: "POST",
                             url: "contactus.php",
                             data: {
                                "data": WEBAPP.cache.$form.serialize()
                            }
                        });

                        submitRequest.done(function(url)
                        {
                            //success
								window.location.replace('http://www.emedicaloffices.com/index.php/thank-you');

                            
                        });

                        submitRequest.fail(function(jqXHR, textStatus)
                        {
                            //fail
                            console.log( "fail - an error occurred: (" + textStatus + ")." );
                        });

                    }

                });
				
				// Form Validation for Patient Survey
				WEBAPP.cache.$formSurvey.validate({
                   onkeyup: false,
                   rules: {
                        "patient_survey_captcha": {
                            "required": true,
                            "remote" :
                            {
                              url: 'uploads/captcha/php/checkCaptchaSurvey.php',
                              type: "post",
                              data:
                              {
                                  codeSurvey: function()
                                  {
                                      return WEBAPP.cache.$captchaInputSurvey.val();
                                  }
                              }
                            }
                        }
                    },
                    messages: {
                        "patient_survey_captcha": {
                            "required": "Please enter the verification code.",
                            "remote": "Verification code is incorrect, please try again."
                        }
                    },
                    submitHandler: function(form)
                    {
                        /* -------- AJAX SUBMIT ----------------------------------------------------- */

                        var submitRequest = $.ajax({
                             type: "POST",
                             url: "patientsurvey.php",
                             data: {
                                "data": WEBAPP.cache.$formSurvey.serialize()
                            }
                        });

                        submitRequest.done(function(url)
                        {
                            //success
								window.location.replace('http://www.emedicaloffices.com/index.php/thank-you-patient-survey');

                            
                        });

                        submitRequest.fail(function(jqXHR, textStatus)
                        {
                            //fail
                            console.log( "fail - an error occurred: (" + textStatus + ")." );
                        });

                    }

                });

            }

        }

        WEBAPP.init();

    });
});