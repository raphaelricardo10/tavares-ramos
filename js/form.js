function formatPhone(field) {
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