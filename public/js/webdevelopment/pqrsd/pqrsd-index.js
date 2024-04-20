const inputs = document.querySelector('.datos-personales').querySelectorAll('input');
const selects = document.querySelector('.datos-personales').querySelectorAll('select');
const selectPersona = document.querySelector('#selectPersona');
document.querySelector('#selectAnonima').addEventListener('change',event => {
    (parseInt(event.target.value)) ? inhabilitarDatosPersonales() : habilitarDatosPersonales();
});

function inhabilitarDatosPersonales() {
    inputs.forEach(input=>{
        input.disabled = true;
    });
    
    selects.forEach(select => {
        select.style.backgroundColor = 'rgba(239, 239, 239, 0.3)';
        select.disabled = true;
    });

    selectPersona.disabled = true;
    selectPersona.style.backgroundColor = 'rgba(239, 239, 239, 0.3)';
}
function habilitarDatosPersonales() {
    inputs.forEach(input=>{
        input.disabled = false;
    });
    
    selects.forEach(select => {
        select.style.backgroundColor = 'field';
        select.disabled = false;
    });

    selectPersona.disabled = false;
    selectPersona.style.backgroundColor = 'field';

}