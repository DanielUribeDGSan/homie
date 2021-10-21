
function onlyLetrasNum(input) {
    var regex = /[$%&|<>#.]/;
    input.value = input.value.replace(regex, "");
}

function onlyEmail(input) {
    var regex = /[$%&|<>#]/;
    input.value = input.value.replace(regex, "");
}

function onlyNum(input) {
    var regex = /[^12345678910]/gi;;
    input.value = input.value.replace(regex, "");
}

