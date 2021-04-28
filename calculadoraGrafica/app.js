class Datos {
    constructor(x, y) {
        this.x = x;
        this.y = y;
    }
}

class Punto {
    addProduct(product) {
        const productList = document.getElementsByName('listData');
        const element = document.createElement('div');
        element.innerHTML = `
        <div>
            <h2>Eje x :</h2>: ${product.x}
            <h2>Eje y :</h2>: ${product.y}
        </div>
    `;
    productList.appendChild(element);
    }
}

document.getElementById('myForm')
    .addEventListener('submit', function (e) {
        const x = document.getElementById('datox').value;
        const y = document.getElementById('datoy').value;

        const product = new Datos(x, y);
        console.log(product);

        e.preventDefault();
    })