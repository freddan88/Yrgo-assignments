const userGuid = localStorage.getItem("freshop-guid");
const formSection = document.getElementById('customer-form');
const hiddenInput = document.getElementById('hidden-input');
const form = document.forms[0];

const order = (myGuid) => {
    const obj = { cart_guid: myGuid };
    console.log(obj)
    fetch('http://localhost:63492/api/orders', {
        headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/json'
        },
        method: 'POST',
        body: JSON.stringify(obj)
    })
    .then(setTimeout(() => location = "./order.html?guid=" + myGuid, 300));
}

hiddenInput.value = userGuid;
form.addEventListener('submit', event => {
    event.preventDefault();

    localStorage.removeItem('freshop-guid');
    const formData = new FormData(form);
    let result = {};

        for (let entry of formData.entries()) {
            result[entry[0]] = entry[1];
        }
        result = JSON.stringify(result)
        console.log(result);
        
        fetch('http://localhost:63492/api/Customer', {
        headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/json'
        },
        method: 'POST',
        body: result
    })
    .then(response => order(userGuid))
});

// console.log(queryString);
// console.log(formSection);
// console.log(form);