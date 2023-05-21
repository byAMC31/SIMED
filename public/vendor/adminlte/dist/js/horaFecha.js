function updateTime() {
    let now = new Date();
    let hours = now.getHours();
    let minutes = now.getMinutes();
    let seconds = now.getSeconds();

    // Asegurarse de que los números son de dos dígitos
    if (hours < 10) hours = "0" + hours;
    if (minutes < 10) minutes = "0" + minutes;
    if (seconds < 10) seconds = "0" + seconds;

    document.getElementById("time").innerText = hours + ":" + minutes + ":" + seconds;
}

// Actualizar la hora inmediatamente y luego cada segundo
updateTime();
setInterval(updateTime, 1000);