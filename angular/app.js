var app = angular.module('pengu', ['angularUtils.directives.dirPagination', 'angucomplete-alt']);
app.run(function ($rootScope, $window) {

	var origin = window.location.origin;
	if (window.location.host == 'localhost' || window.location.host.includes('test.aptimyst.com')) {
		origin += "/pengu";
	}

	$rootScope.baseUrl = origin + "/apis/public/";
	$rootScope.rootUrl = origin;
	$window.baseUrl = $rootScope.rootUr + 'apis/public/';
	$rootScope.currentPage = 0;
	$rootScope.title = " monica";
	$rootScope.wallet = '';

	//snackbar used in angularjs for print message	
	$rootScope.showSnackbar = function (text) {
		var x = document.getElementById("snackbar");
		x.innerHTML = text;
		x.className = "show";
		setTimeout(function () {
			x.className = x.className.replace("show", "");
		}, 3000);
	}

	// snackbar for page up when click edit button
	$rootScope.scrollTop = function () {
		$("html, body").animate({
			scrollTop: 0
		}, 600);
	};


	$rootScope.getParameter = function (param) {
		var url_string = window.location.href
		var url = new URL(url_string);
		var params = url.searchParams.get(param);
		return params;
	}

	// need to add loader and sync with api response
	$rootScope.showLoader = function () {
		$(".loader-container").show();
	}

	$rootScope.hideLoader = function () {
		$(".loader-container").hide();
	}

})


app.filter('linebreaks', function () {
	return function (text) {

		if (text == undefined) {
			return;
		}

		return text.replace(/\n/g, "<br>");
	}
});

app.filter('sce', ['$sce', function ($sce) {
	return $sce.trustAsHtml;
}]);


app.filter('getStatus', function () {
	return function (status, type) {
		if (parseInt(status) == 1 && type == 'c') {
			return `<button class="btn btn-primary">Pending for admin Approval</button>`;
		} else if (parseInt(status) == 2 && type == 'C') {
			return `<button class="btn btn-success">Amount credited to wallet</button>`;
		} else if (parseInt(status) == 3 && type == 'C') {
			return `<button class="btn btn-warning">Accepted(But not credited to wallet)</button>`;
		} else if (parseInt(status) == 4 && type == 'C') {
			return `<button   class="btn btn-danger">Transaction is rejected</button>`;
		} else if (parseInt(status) == 2 && type == 'D') {
			return `<button class="btn" style="background:#00bfff">Amount debited for service</button>`;
		} else if (parseInt(status) == 2 && type == 'RC') {
			return `<button class="btn" style="background:#98e63e">Amount credited for service rejection</button>`;
		} else if (parseInt(status) == 2 && type == 'RW') {
			return `<button class="btn" style="background:#e91e63">Reward</button>`;
		}
	}
})

app.filter('startFrom', function () {
	return function (totalPages, currentPage) {
		currentPage = +currentPage;
		if (currentPage <= 4) {
			return totalPages;
		} else {
			return totalPages;
		}
	}
});

app.factory('ApiUrl', function () {
	return {
		url: projectUrl
	};
});

app.factory('ExcelExport', function ($window) {
	var uri = 'data:application/vnd.ms-excel;base64,',
		template = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--></head><body><table>{table}</table></body></html>',
		base64 = function (s) {
			return $window.btoa(unescape(encodeURIComponent(s)));
		},
		format = function (s, c) {
			return s.replace(/{(\w+)}/g, function (m, p) {
				return c[p];
			})
		};
	return {
		tableToExcel: function (tableId, worksheetName) {
			var table = $(tableId),
				ctx = {
					worksheet: worksheetName,
					table: table.html()
				},
				href = uri + base64(format(template, ctx));
			return href;
		}
	};
})

app.filter('dateToTime', function () {
	return function (Date) {
		let formatted = "";
		let dateType = typeof (Date);
		if (dateType == "object" && Date != null) {
			formatted = Date.getTime();
			return formatted;
		} else {
			return formatted = 0;
		}
	};
});


// Directive for show all data when we do back
app.config(['$provide', '$httpProvider', function ($provide, $httpProvider) {
	$httpProvider.defaults.headers.common['Cache-Control'] = 'no-cache';
}]);


// Directive for email
app.directive('validateEmail', function () {
	var EMAIL_REGEXP = /^[a-zA-Z0-9.!#$%&'*+/=?^`{|}~-]+(\.[_a-z0-9]+)*@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9]+)*(\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)$/;
	return {
		link: function (scope, elm) {
			elm.on("keyup", function () {
				var $el = $(elm);
				var form = $el[0].form;
				var submitBtn = $(form).find('button[type="submit"]');
				var isMatchRegex = EMAIL_REGEXP.test(elm.val());
				if (isMatchRegex || elm.val() == '') {
					elm.css("border", "");
					elm.parent().find('span').remove();
				} else if (isMatchRegex == false) {
					// elm.css("border", "1px solid red");
					if (elm.parent().find('span').length == 0) {
						elm.parent().append('<span class="text-danger">Please provide a valid email id.</span>')
					}
				}
			});
		}
	}
});


// validate url
app.directive('validateUrl', function () {
	var URL_REGEXP = /^(http:\/\/www\.|https:\/\/www\.|http:\/\/|https:\/\/)?[a-z0-9]+([\-\.]{1}[a-z0-9]+)*\.[a-z]{2,5}(:[0-9]{1,5})?(\/.*)?$/;
	return {
		link: function (scope, elm) {
			elm.on("keyup", function () {
				var $el = $(elm);
				var form = $el[0].form;
				var submitBtn = $(form).find('button[type="submit"]');
				var isMatchRegex = URL_REGEXP.test(elm.val());
				if (isMatchRegex || elm.val() == '') {
					elm.css("border", "");
					elm.parent().find('span').remove();
				} else if (isMatchRegex == false) {
					// elm.css("border", "1px solid red");
					if (elm.parent().find('span').length == 0) {
						elm.parent().append('<span class=text-danger>Please provide a valid Url.</span>')
					}
				}
			});
		}
	}
});

// validate telephone
app.directive('validateTel', function () {
	var TEL_REGEXP = "/^\d{0,9}(\.\d{1,9})?$/";
	return {
		link: function (scope, elm) {
			elm.on("keyup", function () {
				var $el = $(elm);
				var form = $el[0].form;
				var submitBtn = $(form).find('button[type="submit"]');
				var isMatchRegex = TEL_REGEXP.test(elm.val());
				if (isMatchRegex || elm.val() == '') {
					elm.css("border", "");
					elm.parent().find('span').remove();
				} else if (isMatchRegex == false) {
					// elm.css("border", "1px solid red");
					if (elm.parent().find('span').length == 0) {
						elm.parent().append('<span class=text-danger>Please provide a valid Url.</span>')
					}
				}
			});
		}
	}
});

// function for loader
app.factory('Loader', function () {
	return {
		showLoader: function () {
			$("#loaderContainer").show();
		},
		hideLoader: function () {
			$("#loaderContainer").hide();
		}

	};
});

// Directive for file upload  multiple
app.directive("ngUploadChange", function () {
	return {
		scope: {
			ngUploadChange: "&"
		},
		link: function ($scope, $element, $attrs) {
			$element.on("change", function (event) {
				$scope.$apply(function () {
					$scope.ngUploadChange({
						$event: event
					})
				})
			})
			$scope.$on("$destroy", function () {
				$element.off();
			});
		}
	}
});


app.directive('numbersOnly', function () {
	return {
		require: 'ngModel',
		link: function (scope, element, attr, ngModelCtrl) {
			function fromUser(text) {
				if (text) {
					var transformedInput = text.replace(/[^\d]/, '');
					if (transformedInput !== text) {
						ngModelCtrl.$setViewValue(transformedInput);
						ngModelCtrl.$render();
					}
					return transformedInput;
				}
				return undefined;
			}
			ngModelCtrl.$parsers.push(fromUser);
		}
	};
});

app.directive('validNumber', function () {
	return {
		require: 'ngModel',
		link: function (scope, element, attrs, ngModelCtrl) {
			if (!ngModelCtrl) {
				return;
			}
			ngModelCtrl.$parsers.push(function (val) {
				if (angular.isUndefined(val)) {
					var val = '';
				}
				var clean = val.replace(/[^-0-9\.]/g, '');
				var negativeCheck = clean.split('-');
				var decimalCheck = clean.split('.');
				if (!angular.isUndefined(negativeCheck[1])) {
					negativeCheck[1] = negativeCheck[1].slice(0,
						negativeCheck[1].length);
					clean = negativeCheck[0] + '-' + negativeCheck[1];
					if (negativeCheck[0].length > 0) {
						clean = negativeCheck[0];
					}
				}
				if (!angular.isUndefined(decimalCheck[1])) {
					decimalCheck[1] = decimalCheck[1].slice(0, 2);
					clean = decimalCheck[0] + '.' + decimalCheck[1];
				}
				if (val !== clean) {
					ngModelCtrl.$setViewValue(clean);
					ngModelCtrl.$render();
				}
				return clean;
			});
			element.bind('keypress', function (event) {
				if (event.keyCode === 32) {
					event.preventDefault();
				}
			});
		}
	};
});

app.directive("fileInput", function ($parse) {
	return {
		link: function ($scope, element, attrs) {
			element.on("change", function (event) {
				$parse(attrs.fileInput).assign($scope, element[0].files);
				$scope.$apply();
			});
		}
	}
});

app.filter('sce', ['$sce', function ($sce) {
	return $sce.trustAsHtml;
}]);
app.directive('customOnChange', function ($parse, $rootScope) {
	return {
		restrict: 'A',
		link: function ($scope, element, attrs) {
			element.on('change', function (changeEvent) {
				var reader = new FileReader();
				reader.onload = function (e) {
					var bstr = e.target.result;
					var workbook = XLSX.read(bstr, {
						type: 'binary'
					});
					var first_sheet_name = workbook.SheetNames[0];
					var worksheet = workbook.Sheets[first_sheet_name];
					var json = XLSX.utils.sheet_to_json(worksheet);

					if (attrs.validate == 'SG' && json[0].category == undefined) {
						return $rootScope.showandhide("Please Select Sunglasses Excel");
					} else if (attrs.validate == 'CL' && json[0].lensCategory == undefined) {
						return $rootScope.showandhide("Please Select Contact Lens Excel");
					}
					$parse(attrs.importsheetjs).assign($scope, json);
					$scope.$eval(attrs.customOnChange);
					$scope.$apply();
				};
				reader.readAsBinaryString(changeEvent.target.files[0]);
			});
			// element.bind('change', onChangeFunc);
		}
	};
});

app.directive("owlCarousel", function () {
	return {
		restrict: 'E',
		transclude: false,
		link: function (scope) {
			scope.initCarousel = function (element) {
				console.log('initCarousel');
				// provide any default options you want
				var defaultOptions = {};
				var customOptions = scope.$eval($(element).attr('data-options'));
				// combine the two options objects
				for (var key in customOptions) {
					defaultOptions[key] = customOptions[key];
				}
				// init carousel
				var curOwl = $(element).data('owlCarousel');
				if (!angular.isDefined(curOwl)) {
					$(element).owlCarousel(defaultOptions);
				}
				scope.cnt++;
			};
		}
	};
}).directive('owlCarouselItem', [
	function () {
		return {
			restrict: 'A',
			transclude: false,
			link: function (scope, element) {
				// wait for the last item in the ng-repeat then call init
				if (scope.$last) {
					console.log('lst element');
					scope.initCarousel(element.parent());
				}
			}
		};
	}
]);

app.filter('myDate', function ($filter) {
	var angularDateFilter = $filter('date');
	return function (theDate) {
		return angularDateFilter(theDate, 'dd-MM-yyyy');
	}
});

// code for update date from input box
app.directive("datepicker", function () {
	return {
		restrict: "A",
		require: "ngModel",
		link: function (scope, elem, attrs, ngModelCtrl) {
			var modelName = attrs['datePicker'];
			var options = {
				dateFormat: "dd-mm-yy",
				changeYear: true,
				defaultDate: '-0yr',
				maxDate: 1000,
				onSelect: function (dateText) {
					scope.$apply(function () {
						ngModelCtrl.$setViewValue(dateText);
					});
				},
				onClose: function (dateText, inst) { }
			};
			elem.datepicker(options);
		}
	}
});



app.directive("showPassword", function () {
	return function linkFn(scope, elem, attrs) {
		$(elem).click(function (_event) {

			let _input = $(this).prev();
			$(this).toggleClass("fa-eye-slash");
			$(this).toggleClass("fa-eye");
			var type = $(_input).attr("type");
			if (type == "password") {
				_input.attr("type", "text");
			} else {
				_input.attr("type", "password");
			}
		})
	};
});

// import data from excelsheet to database table
app.directive("importSheetJs", function ($parse) {
	return {
		link: function ($scope, $elm, attrs) {
			$elm.on('change', function (changeEvent) {
				// TODO: excel validation for product excel upload
				// array show be send from html attribute
				// should not be static	
				var reader = new FileReader();
				reader.onload = function (e) {
					var bstr = e.target.result;
					var workbook = XLSX.read(bstr, {
						type: 'binary'
					});
					var first_sheet_name = workbook.SheetNames[0];
					var worksheet = workbook.Sheets[first_sheet_name];
					var json = XLSX.utils.sheet_to_json(worksheet);
					$parse(attrs.importSheetJs).assign($scope, json);
					$scope.$apply();
				};
				reader.readAsBinaryString(changeEvent.target.files[0]);
			});
		}
	};

});

// slick slider js start

app.constant('slickObj', {
	slidesToShow: 4,
	slidesToScroll: 1,
	autoplay: true,
	autoplaySpeed: 1500,
	arrows: true,
	dots: true,
	pauseOnHover: false,
	responsive: [{
		breakpoint: 1023,
		settings: {
			slidesToShow: 2,
			slidesToScroll: 1,
		}
	}, {
		breakpoint: 520,
		settings: {
			slidesToShow: 1,
			slidesToScroll: 1,
		}
	}]
});


app.directive('slickSlider', function (slickObj) {
	return {
		restrict: 'A',
		scope: {
			'data': '='
		},
		link: function (scope, element, attrs) {
			var isInitialized = false;
			scope.$watch('data', function (newVal, oldVal) {
				if (newVal) {
					if (newVal.length > 0 && !isInitialized) {
						setTimeout(() => {
							$(element).slick(slickObj);
							isInitialized = true;
						}, 200);
					}
				}
			});
		}
	}
});


app.filter('nl2br', function () {
	var span = document.createElement('span');
	return function (input) {
		if (!input) return input;
		var lines = input.split('\n');

		for (var i = 0; i < lines.length; i++) {
			span.innerText = lines[i];
			span.textContent = lines[i];  //for Firefox
			lines[i] = span.innerHTML;
		}
		return lines.join('<br />');
	}
});
// slick slider js end

app.filter('slug', function () {
    return function (input) {
        if (!input)
            return;
        // make lower case and trim
        var slug = input.toLowerCase().trim();
        // replace invalid chars with spaces
        slug = slug.replace(/[^a-z0-9\s-]/g, ' ');
        // replace multiple spaces or hyphens with a single hyphen
        slug = slug.replace(/[\s-]+/g, '-');

        slug = slug.replace(/\//g, '-');
        return slug;
    };
});

function ajaxCall() {
    this.send = function(data, url, method, success, type) {
        type = type||'json';
        var successRes = function(data) {
            success(data);
        }

        var errorRes = function(e) {
            console.log(e);
        }
        jQuery.ajax({
            url: url,
            type: method,
            data: data,
            success: successRes,
            error: errorRes,
            dataType: type,
            timeout: 60000
        });

    }

}

function locationInfo() {
    var rootUrl = "https://geodata.solutions/api/api.php";
    //now check for set values
    var addParams = '';
    if(jQuery("#gds_appid").length > 0) {
        addParams += '&appid=' + jQuery("#gds_appid").val();
    }
    if(jQuery("#gds_hash").length > 0) {
        addParams += '&hash=' + jQuery("#gds_hash").val();
    }

    var call = new ajaxCall();

    this.confCity = function(id) {
        var url = rootUrl+'?type=confCity&countryId='+ jQuery('#countryId option:selected').attr('countryid') +'&stateId=' + jQuery('#stateId option:selected').attr('stateid') + '&cityId=' + id;
        var method = "post";
        var data = {};
        call.send(data, url, method, function(data) {
        });
    };


    this.getCities = function(id) {
        jQuery(".cities option:gt(0)").remove();
        var stateClasses = jQuery('#cityId').attr('class');

        var cC = stateClasses.split(" ");
        cC.shift();
        var addClasses = '';
        if(cC.length > 0)
        {
            acC = cC.join();
            addClasses = '&addClasses=' + encodeURIComponent(acC);
        }
        var url = rootUrl+'?type=getCities&countryId='+ jQuery('#countryId option:selected').attr('countryid') +'&stateId=' + id + addParams + addClasses;
        var method = "post";
        var data = {};
        jQuery('.cities').find("option:eq(0)").html("Please wait..");
        call.send(data, url, method, function(data) {
            jQuery('.cities').find("option:eq(0)").html("Select City");
            if(data.tp == 1){
                var listlen = Object.keys(data['result']).length;

                if(listlen > 0)
                {
                    jQuery.each(data['result'], function(key, val) {

                        var option = jQuery('<option />');
                        option.attr('value', val).text(val);
                        jQuery('.cities').append(option);
                    });
                }
                else
                {
                    var usestate = jQuery('#stateId option:selected').val();
                    var option = jQuery('<option />');
                    option.attr('value', usestate).text(usestate);
                    option.attr('selected', 'selected');
                    jQuery('.cities').append(option);
                }

                jQuery(".cities").prop("disabled",false);
            }
            else{
                alert(data.msg);
            }
        });
    };

    this.getStates = function(id) {
		debugger
        jQuery(".states option:gt(0)").remove();
        jQuery(".cities option:gt(0)").remove();
        //get additional fields
        var stateClasses = jQuery('#stateId').attr('class');

        var cC = stateClasses.split(" ");
        cC.shift();
        var addClasses = '';
        if(cC.length > 0)
        {
            acC = cC.join();
            addClasses = '&addClasses=' + encodeURIComponent(acC);
        }
        var url = rootUrl+'?type=getStates&countryId=' + id + addParams  + addClasses;
        var method = "post";
        var data = {};
        jQuery('.states').find("option:eq(0)").html("Please wait..");
        call.send(data, url, method, function(data) {
            jQuery('.states').find("option:eq(0)").html("Select State");
            if(data.tp == 1){
				debugger
                jQuery.each(data['result'], function(key, val) {
                    var option = jQuery('<option />');
                    option.attr('value', val).text(val);
                    option.attr('stateid', key);
                    jQuery('.states').append(option);
                });
                jQuery(".states").prop("disabled",false);
            }
            else{
                alert(data.msg);
            }
        });
    };

    this.getCountries = function() {
        //get additional fields
        var countryClasses = jQuery('#countryId').attr('class');

        var cC = countryClasses.split(" ");
        cC.shift();
        var addClasses = '';
        if(cC.length > 0)
        {
            acC = cC.join();
            addClasses = '&addClasses=' + encodeURIComponent(acC);
        }

        var presel = false;
        var iip = 'N';
        jQuery.each(cC, function( index, value ) {
            if (value.match("^presel-")) {
                presel = value.substring(7);

            }
            if(value.match("^presel-byi"))
            {
                var iip = 'Y';
            }
        });


        var url = rootUrl+'?type=getCountries' + addParams + addClasses;
        var method = "post";
        var data = {};
        jQuery('.countries').find("option:eq(0)").html("Please wait..");
        call.send(data, url, method, function(data) {
            jQuery('.countries').find("option:eq(0)").html("Select Country");

            if(data.tp == 1){
                if(presel == 'byip')
                {
                    presel = data['presel'];
                    console.log('2 presel is set as ' + presel);
                }


                if(jQuery.inArray("group-continents",cC) > -1)
                {
                    var $select = jQuery('.countries');
                    console.log(data['result']);
                    jQuery.each(data['result'], function(i, optgroups) {
                        var $optgroup = jQuery("<optgroup>", {label: i});
                        if(optgroups.length > 0)
                        {
                            $optgroup.appendTo($select);
                        }

                        jQuery.each(optgroups, function(groupName, options) {
                            var coption = jQuery('<option />');
                            coption.attr('value', options.name).text(options.name);
                            coption.attr('countryid', options.id);
                            if(presel) {
                                if (presel.toUpperCase() == options.id) {
                                    coption.attr('selected', 'selected');
                                }
                            }
                            coption.appendTo($optgroup);
                        });
                    });
                }
                else
                {
                    jQuery.each(data['result'], function(key, val) {
                        var option = jQuery('<option />');
                        option.attr('value', val).text(val);
                        option.attr('countryid', key);
                        if(presel)
                        {
                            if(presel.toUpperCase() ==  key)
                            {
                                option.attr('selected', 'selected');
                            }
                        }
                        jQuery('.countries').append(option);
                    });
                }
                if(presel)
                {
                    jQuery('.countries').trigger('change');
                }
                jQuery(".countries").prop("disabled",false);
            }
            else{
                alert(data.msg);
            }
        });
    };

}

jQuery(function() {
    var loc = new locationInfo();
    loc.getCountries();
    jQuery(".countries").on("change", function(ev) {
        var countryId = jQuery("option:selected", this).attr('countryid');
        if(countryId != ''){
            loc.getStates(countryId);
        }
        else{
            jQuery(".states option:gt(0)").remove();
        }
    });
    jQuery(".states").on("change", function(ev) {
        var stateId = jQuery("option:selected", this).attr('stateid');
        if(stateId != ''){
            loc.getCities(stateId);
        }
        else{
            jQuery(".cities option:gt(0)").remove();
        }
    });

    jQuery(".cities").on("change", function(ev) {
        var cityId = jQuery("option:selected", this).val();
        if(cityId != ''){
            loc.confCity(cityId);
        }
    });
});