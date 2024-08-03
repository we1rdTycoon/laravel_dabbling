import *  as bootstrap  from 'bootstrap';
import 'bootstrap/dist/css/bootstrap.min.css';
import $ from "jquery";


document.getElementById("start_btn").addEventListener("click", async function() { 
    let response = await fetch('/numerals_start_training', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json;charset=utf-8',
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        body: JSON.stringify({})
    });
});




//alert("gfgfdgfdg");