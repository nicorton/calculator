function res(val) {
    document.getElementById("answer").value += val
}
function clearfield() {
    let st = document.getElementById("answer").value
    document.getElementById("answer").value =
    st.substring(0, st.length - 1);
}

function ans(event) {
    if (event.key == '0' || event.key == '1'
        || event.key == '2' || event.key == '3'
        || event.key == '4' || event.key == '5'
        || event.key == '6' || event.key == '7'
        || event.key == '8' || event.key == '9'
        || event.key == '+' || event.key == '-'
        || event.key == '*' || event.key == '/'
        || event.key == 'sqr()')
        document.getElementById("answer").value += event.key;
}

var cal = document.getElementById("calculator");
cal.onkeyup = function (event) {
    if (event.keyCode === 13) {
        console.log("Enter");
        let a = document.getElementById("answer").value
        console.log(a);
        calculate();
    }
}

function calculate() {
    let a = document.getElementById("answer").value
    let b = math.evaluate(a)
    document.getElementById("answer").value = b
}

// Calculates the square root of the value 
function my_sqrt(){
    let c = document.getElementById("answer").value
    let d = math.sqrt(c)
    document.getElementById("answer").value = d
}

// This function is currently not in use
function clear_input() {
    document.getElementById("answer").value = ""
}