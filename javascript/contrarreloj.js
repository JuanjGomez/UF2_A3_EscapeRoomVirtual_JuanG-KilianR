let tiempoinicial = 30;
let tiemporestante = tiempoinicial;

const cuentaregresivael = document.getElementById('cuentaregresiva');

function actualizartemporizador() {
    const minutos = Math.floor(tiemporestante / 60);
    let segundos = tiemporestante % 60;

    segundos = segundos < 10 ? '0' + segundos : segundos;

    cuentaregresivael.textContent = minutos + ':' + segundos;

    tiemporestante--;

    if (tiemporestante < 0) {
        clearInterval(intervalo);
        acabaTiempo();
    }
}

const intervalo = setInterval(actualizartemporizador, 1000);

function acabaTiempo() {
    let timerInterval;
    Swal.fire({
      icon: 'warning',
      title: '¡Upps!',
      text: 'Parece que se te ha acabado el tiempo',
      timer: 1500,
      timerProgressBar: true,
      didOpen: () => {
        Swal.showLoading();
        const timer = Swal.getPopup().querySelector("b");
        timerInterval = setInterval(() => {
          timer.textContent = `${Swal.getTimerLeft()}`;
        }, 100);
      },
      willClose: () => {
        clearInterval(timerInterval);
      }
    }).then((result) => {
      if (result.dismiss === Swal.DismissReason.timer) {
        console.log("I was closed by the timer");
        window.location.href = '../mapas.php';
      }
    });
}

