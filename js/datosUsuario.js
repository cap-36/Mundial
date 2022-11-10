class DatosUsuario {
    addUsuario(e) {
        e.preventDefault();
        if (e.target.classList.contains('login')) {
            const selectUsuario = e.target.parentElement;
            // this.readContent(selectProduct);
            // shoppingCartContainer.classList.remove('inactive');
    
            // setTimeout(function() {
            // shoppingCartContainer.classList.add('inactive');
            // }, 4000);
            console.log(selectUsuario);
            // closeProductDetailAside();
        } 
        // else if (e.target.classList.contains('btn-product-add')) {
        //     // const selectProduct1 = e.target.parentElement.parentElement.parentElement.parentElement.parentElement;
        //     // this.readContent1(selectProduct1);
        //     // shoppingCartContainer.classList.remove('inactive');

        //     // console.log(selectProduct1);
        // }
    }
}