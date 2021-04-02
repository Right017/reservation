<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Hello, world!</title>
<style>
html{
  scroll-behavior: smooth;
}
#myBtn {
  display: none; /* Hidden by default */
  position: fixed; /* Fixed/sticky position */
  bottom: 20px; /* Place the button at the bottom of the page */
  right: 30px; /* Place the button 30px from the right */
  z-index: 99; /* Make sure it does not overlap */
  border: none; /* Remove borders */
  outline: none; /* Remove outline */
  background-color: red; /* Set a background color */
  color: white; /* Text color */
  cursor: pointer; /* Add a mouse pointer on hover */
  padding: 15px; /* Some padding */
  border-radius: 10px; /* Rounded corners */
  font-size: 18px; /* Increase font size */
  
}

#myBtn:hover {
  background-color: #555; /* Add a dark-grey background on hover */
}</style>
  </head>
  <body>
  <div class="col-mx-8">
  </div>
  <div class="col-mx-4">
  <table class="table table-borderless">
  <tbody>
    <tr>
      
      <th scope="col"> 
      <div class="form-group">
                        <label for="username">FIRST NAME</label>
                        <input type="text" class="form-control" id="username"style="height: 44px; " name="firstname"
                            aria-describedby="emailHelp" required>
                    </div>
      </th>
      
      <th scope="col"> 
      <div class="form-group">
                        <label for="username">LAST NAME</label>
                        <input type="text" class="form-control" id="username"style="height: 44px;" name="lastname"
                            aria-describedby="emailHelp" required>
                    </div>
      </th>
    </tr>
  
 
    <tr>
    <th scope="col"> 
      <div class="form-group">
                        <label for="username">DATE</label>
                        <input type="date" class="form-control" id="username"style="height: 44px;" name="date"
                            aria-describedby="emailHelp" required>
                    </div>
      </th>
      
      <th scope="col"> 
      <div class="form-group">
                        <label for="username">TIME</label>
                        <input type="time" class="form-control" id="username"style="height: 44px;" name="time"
                            aria-describedby="emailHelp" required>
                    </div>
      </th>
    </tr>
    <tr>
    <th scope="col"> 
      <div class="form-group">
                        <label for="nguest">NO OF GUEST</label>
                        <input type="number" class="form-control" id="username"style="height: 44px;" name="guest"
                            aria-describedby="emailHelp" required>
                    </div>
      </th>
      
      <th scope="col"> 
      <div class="form-group">
                        <label for="rtype">RESERVATION TYPE</label>
                        <input type="text" class="form-control" id="username"style="height: 44px;" name="rtype"
                            aria-describedby="emailHelp" required>
                    </div>
      </th>
    </tr>
    <tr>
    <th scope="col"> 
      <div class="form-group">
                        <label for="phone">PHONE</label>
                        <input type="number" class="form-control" id="username"style="height: 44px;" name="phone"
                            aria-describedby="emailHelp" required>
                    </div>
      </th>
      
      <th scope="col"> 
      <div class="form-group">
                        <label for="email">EMAIL</label>
                        <input type="text" class="form-control" id="username"style="height: 44px;" name="email"
                            aria-describedby="emailHelp" required>
                    </div>
      </th>
    </tr>
    <tr>
    <th scope="col"> 
    <div class="form-check" style="padding-left:0px;">
                <table class="table">
                <tbody>
                <tr>
                    <th > 
                        <label class="form-check-label" for="defaultCheck1">
                             VEG
                         </label>
                         
                     </th>
                     <td> <input class="form-check-input" type="checkbox" id="disabledFieldsetCheck"  style="height:15px; width:15px; margin-left: -11px;"></td>
                    
                    <th > 
                        <label class="form-check-label" for="defaultCheck1">
                            NON-VEG
                        </label>
                        
                    </th>
                    <td> <input class="form-check-input" type="checkbox" id="disabledFieldsetCheck"  style="height:15px; width:15px; margin-left: -11px;"></td>
                    </tr>
                </tbody>
                </table>
               
</div>
      </th>
      
      <th scope="col"> 
      <table class="table">
                <tbody>
                <tr>
                    <th > 
                        <label class="form-check-label" for="exampleRadios1">
                         Default radio
                        </label>
                    </th>
                    <td > 
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" style="height:15px; width:15px; margin-left: -11px;">
                    </td>
                    <th > 
                        <label class="form-check-label" for="exampleRadios1">
                         Default radio
                         </label>
                    </th>
                    <td> 
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" style="height:15px; width:15px; margin-left: -11px;">
                    </td>
                    </tr>
                </tbody>
                </table>

      </th>
    </tr>
    <tr>

                                <th colspan="2">
                                    <div class="form-group">
                                        <label for="rtype">ANY SPECIAL REQUAIRMENT</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"
                                            required></textarea>
                                    </div>
                                </th>

                            </tr>
      
      <td colspan="2">
      <div class="form-group">
      <button type="button" class="btn btn-outline-success" style="width: 317px; height: 50px;font-size: 20px;  border-block-color: none; margin-top:20px; margin-left:53px;">Login</button>
                    </div>
      </td>
      
    </tr>
  </tbody>
</table>
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
<script>
//Get the button:
mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
</script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>