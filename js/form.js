var mailRegex = /^[a-z0-9.]+@[a-z0-9]+(\.[a-z]+)+$/;
var phoneRegex = /^\([0-9]{2}\)[\s]?[9]?[0-9]{4}-[0-9]{4}$/;

function formatPhone(field) {
    /*
    var phone = field.value.replace(/[^\-\(\)\s]/g, '')
    if(/^\d{10,11}$/.test(phone)){
        field.value = '(' + field.value;
        field.value = field.value.slice(0, -1) + ') ' +
        field.value.slice(-2, -1);
    }
    */
    field.addEventListener('keyup', function (event) {
        const key = event.key;
        if (key != "Backspace" && key != "Delete") {
            if (/^\d{1,2}$/.test(field.value)) {
                field.value = '(' + field.value;
                return true;
            }
            if (/^\(\d{2}$/.test(field.value)) {
                field.value = field.value + ') ';
                return true;
            }
            if (/^\(?\d{3}$/.test(field.value)) {
                field.value = field.value.slice(0, -1) + ') ' +
                    field.value.slice(-2, -1);
                return true;
            }
            if (/^\(\d{2}\)\s[0-8]{4}$/.test(field.value)) {
                field.value = field.value + '-';
                field.setAttribute('maxLength', '14');
                return true;
            } else {
                if (/^\(\d{2}\)\s\d{5}$/.test(field.value)) {
                    field.value = field.value + '-';
                    field.setAttribute('maxLength', '15');
                    return true;
                }
            }
            if (/^\(\d{2}\)\s[0-8]{4,5}$/.test(field.value) ||
                /^\(\d{2}\)\s\d{5,6}$/.test(field.value)) {
                field.value = field.value.slice(0, -1) + ') ' +
                    field.value.slice(-2, -1);
                return true;
            }
        }

    });
}

function validateField(input, exp) {
    if (!exp.test(input.value)) {
        input.setCustomValidity("Insira o número no formato (xx) xxxxx-xxxx");
        return false;
    } else {
        input.setCustomValidity("");
    }
}

function checkOptions(select, value, containerID){
    var container = document.getElementById(containerID);
    if(select.value == value){
        container.classList.add("d-flex");
        container.classList.remove("d-none");
    }
    else{
        container.classList.add("d-none");
        container.classList.remove("d-flex");
    }
}