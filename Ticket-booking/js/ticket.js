

function bookTicket(movieName, date, time){
    var name = document.getElementById("user-info").dataset.username;
    // alert("hello "+ name);

    let isConfirmed = confirm(`Are you sure you want to book a ticket for\n${movieName}`);
    if(!isConfirmed){
        return;
    }

    let bookingId = Math.random().toString(36).substring(2,9);

    let ticketData = `Movie: ${movieName}\nName: ${name}\nDate: ${date}\nTime: ${time}\nBooking ID: ${bookingId}`;

    // alert(ticketData);

    document.getElementById('qrcode').innerHTML = '';
    new QRCode(document.getElementById('qrcode'),{
        text : ticketData,
        width: 200,
        height: 200
    });

    document.getElementById("qr-details").innerHTML = `
             <p><strong>Movie:</strong> ${movieName}</p>
             <p><strong>Date:</strong> ${date}</p>
             <p><strong>Time:</strong> ${time}</p>
             <p><strong>Booked by:</strong> ${name}</p>`;


    document.getElementById("qrcode-container").style.display = "flex";
    // document.getElementById("qrcode-container").scrollIntoView({ behavior: "smooth" });
}

function hideQR(){
    document.getElementById("qrcode-container").style.display = "none";
}
