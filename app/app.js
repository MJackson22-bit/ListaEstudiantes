const F_Alumnos = document.getElementById('F-Alumnos');
const A_F = document.getElementById('A-F');

function MostrarFormulario(){
    A_F.style.display = ' none';
    F_Alumnos.style.display = 'block';
}
function OcultarFormulario(){
    A_F.style.display = 'inline';
    F_Alumnos.style.display = 'none';
}