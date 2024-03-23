var general = null;
document.addEventListener('DOMContentLoaded', function () {
   const csrfToken = document.getElementById('csrf_token').getAttribute('data-csrf_token');
    var url = window.location.origin;

    general = {
        getHeaderRequest: function () {
            return {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': csrfToken
            }
        },

        execRequest: async function(endpoint, data, method='get') {

            var params = {
                method: method.toUpperCase(),
                headers: this.getHeaderRequest()
            };
            if (data && method != 'get') {
                if (typeof data === "object" && Object.keys(data).length > 0) {
                    data = JSON.stringify(data);
                } else {
                    delete params.headers['Content-Type'];
                }

                params.body = data;
            }

            const execReq = await fetch(url + endpoint, params);
            return execReq.json();
        },

        getDataForm: function (target_form, type='object') {
            var data = (type == 'object') ? {} : new FormData();
            var form = $(target_form).serializeArray();
            for (var i of form) {
                var key = i.name;
                var value = i.value;

                if (type === 'object') {
                    data[key] = value;
                } else {
                    data.append(key, value);
                }

            }
            return data;
        },
        capitalizeFirstLetter: function (str) {
            return str.charAt(0).toUpperCase() + str.slice(1);
        },
        validateInputs: function(inputs, dataForm){
            const errors = {};
            const data = {};

            inputs.forEach( function(field) {

                if (!(field.input in dataForm) || dataForm[field.input].trim() === '') {
                    errors[field.input] = `El campo ${field.input} es requerido.`;
                }else {
                    switch (field.validation){

                        case 'email':
                            if (/^\w+([.-_+]?\w+)*@\w+([.-]?\w+)*(\.\w{2,10})+$/.test(dataForm[field.input]) === false){
                                errors[field.input] = `El campo ${field.input} no es valido.`;
                            }
                            break;
                        case 'numbers':
                            if (/^[0-9]+$/.test(dataForm[field.input]) === false){
                                errors[field.input] = `El campo ${field.input} no es valido.`;
                            }
                            break;
                        case 'phone':
                            if (/^([0-9]){10,12}$/.test(dataForm[field.input]) === false){
                                errors[field.input] = `El campo ${field.input} no es valido.`;
                            }
                            break;
                    }
                }

                if (errors.hasOwnProperty(field.input) === false){
                    data[field.input] = dataForm[field.input];
                }

            });

            const is_valid = (Object.keys(errors).length === 0)?? false;
            if (is_valid === false ){
                for (var key in errors) {
                    if (errors.hasOwnProperty(key)) {
                        var errorMessage = errors[key];
                        let elementInput = document.getElementById(key);
                        if (elementInput) {
                            elementInput.focus();
                            elementInput.style.border = '2px solid red';
                        }
                    }
                }
            }


            return {errors, data};
        },
        processResponseRequest: function(response){
            const errors = (response.hasOwnProperty('errors'))? response.errors : {};
            var str_errors = '';

            for(var index in errors){
                var value = errors[index];
                if (typeof value === 'object' && Object.keys(value).length>0){
                    for(var _index in value){
                        str_errors += (str_errors !==''? '<br>':'')+ value[_index];
                    }
                }else{
                    str_errors += (str_errors !==''? '<br>':'') + value;
                }
            }


            return str_errors;
        },
        showAlert: function (title, message, type_alert='info') {
            swal({
                title: title,
                text: message,
                html: message,
                type: type_alert,
                confirmButtonText: 'Aceptar',
                padding: '2em'
            });

        },
        getCurrentDate : function(){
            let today = new Date();
            let dd = String(today.getDate()).padStart(2, '0');
            let mm = String(today.getMonth() + 1).padStart(2, '0'); // Enero es 0!
            let yyyy = today.getFullYear();

            return yyyy + '-' + mm + '-' + dd;
        },
        extend_first_item_acordion : function (trgt_header, trgt_body) {
            $(trgt_header).removeClass("collapsed");
            if($(trgt_body).hasClass("show")== false) $(trgt_body).addClass("show");
        }
    };

});