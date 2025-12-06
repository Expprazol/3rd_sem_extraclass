function getInputs() {
    const first = parseFloat(document.getElementById('first').value);
    const second = parseFloat(document.getElementById('second').value);
    return { first, second };
}

function sum() {
    let first = document.getElementById('first').value;
    let second = document.getElementById('second').value;
    document.getElementById('total').value = first + second;
}

function sub() {
    const { first, second } = getInputs();
    if (isNaN(first) || isNaN(second)) {
        document.getElementById('total').value = 'Invalid input';
        return;
    }
    document.getElementById('total').value = first - second;
}

function mul() {
    const { first, second } = getInputs();
    if (isNaN(first) || isNaN(second)) {
        document.getElementById('total').value = 'Invalid input';
        return;
    }
    document.getElementById('total').value = first * second;
}

function div() {
    const { first, second } = getInputs();
    if (isNaN(first) || isNaN(second)) {
        document.getElementById('total').value = 'Invalid input';
        return;
    }
    if (second === 0) {
        document.getElementById('total').value = 'Cannot divide by zero';
        return;
    }
    document.getElementById('total').value = first / second;
}