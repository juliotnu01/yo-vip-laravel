@extends('layouts.app')
@section('content')
<!-- <!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>YoVIP</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
  </head>
  <body> -->
    <div class="columns top">
        <div class="column">
            <a href="#">YoVIP Dashboard</a>
        </div>
        <div class="column">
            <input type="text" placeholder="Search for agent, user etc..." class="search-field" />
        </div>
        <div class="column">
            <div class="my-profile is-pulled-right">
                <img src="images/user.png" alt="Glenna Aguero" class="is-pulled-left" /><span>Glenna Aguero</span>
            </div>
            <div class="agents is-pulled-right">
                <img src="images/agent1.png" alt="Agent" />
                <img src="images/agent2.png" alt="Agent" />
                <img src="images/agent3.png" alt="Agent" />
                <img src="images/agent4.png" alt="Agent" />
                <img src="images/agent5.png" alt="Agent" />
            </div>            
        </div>
    </div>
    <div class="columns main-links">
        <a href="#" class="column">
            Vendor
        </a>
        <!--<a href="#" class="column active">
            Agent
        </a>-->
        <a href="#" class="column">
            Client
        </a>
    </div>
    <div class="columns main-content">
        <div class="column is-multiline">
            <div class="request-box">
                <p>Type of Request</p>
                <div class="control">
                    <div class="select">
                        <select>
                        <option>Select dropdown</option>
                        <option>With options</option>
                        </select>
                    </div>
                </div>
                <div class="columns is-multiline">
                    <div class="column is-6"><p>Restaurant Name <span>Hard Rock Cafe</span></p></div>
                    <div class="column is-6"><p>Time Request <span>09:30 PM</span></p></div>
                    <div class="column is-6"><p>Type of Cuisine <span>American</span></p></div>
                    <div class="column is-6"><p># in Party <span>5 Person</span></p></div>
                    <div class="column is-6"><p>Special Request or Occasion <span>Business Meeting and Lunch</span></p></div>
                </div> 
            </div>
            <h4>Vendor List</h4>
            <ul class="vendor-list">
                <li><a href="#">Open Table</a></li>
                <li><a href="#">Yelp</a>
                    <ul>
                        <li><a href="#">French Cusine</a></li>
                    </ul>
                </li>
                <li><a href="#">Le Pigeon</a></li>
                <li><a href="#">Joel Robuchon</a></li>
                <li><a href="#">Trois Mec</a></li>
                <li><a href="#">Metite Provence</a></li>
                <li><a href="#">Belle Epicurean</a></li>
            </ul>
        </div>
        <div class="column">
            <div class="message-box">
                <div class="top">
                    <span class="user-name is-pulled-left">Susie Lampan</span>
                    <div class="control is-pulled-right">
                        <div class="select select-user-box">
                            <select class="select-user">
                            <option>Facebook</option>
                            <option>With options</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="messages">
                    <div class="message-line received">
                        <p>Hour of Operation?</p>
                    </div>
                    <div class="message-line sent">
                        <p>Let me check</p>
                    </div>
                    <div class="message-line sent">
                        <p>Is this for a special occasion?</p>
                    </div>
                    <div class="message-line received">
                        <p>Are there any children in the party?</p>
                    </div>
                    <div class="message-line sent">
                        <p>Valet Parking? Let me check</p>
                    </div>
                </div>
                <div class="suggestions">
                    <a href="#">Free for party?</a>
                    <a href="#">Concert Anywhere?</a>
                </div>
                <div class="message-checkbox">
                    <div class="field">
                        <input class="is-checkradio is-info" id="checkbox-template" type="checkbox" name="checkbox-template" checked="checked">
                        <label for="checkbox-template">Choose Template</label>
                    </div>
                    <div class="field">
                        <input class="is-checkradio is-info" id="checkbox-survay" type="checkbox" name="checkbox-survay">
                        <label for="checkbox-survay">Send Survay</label>
                    </div>
                </div>
                <div class="message-field">
                    <input type="text" placeholder="Type your message here…" />
                </div>
            </div>
            <example-component></example-component>

        </div>
        <div class="column">
            <h4>Guest Info</h4><a href="#" class="button is-info is-rounded small">Edit</a>
            <p>
                Name: <span>John T. Tolson</span><br /> 
                Phone: <span>151-46-3976</span><br />
                Email: <span>JohnTolson@rhyta.com</span><br />
                Married/Unmarried: <span>Married</span><br />
                Spouse's Name: <span>Rosemary Talson</span><br />
                Children: <span>3</span><br />
                Name/Age: <span>Erin Talson (2y)</span><br />
                Likes: <span>Traveling</span><br />
                From: <span>Washington DC</span><br />
                School: <span>Horace Greeley High School</span><br />
                Concerts Attended: <span>2</span><br />
                Drinks: <span>Soda pop</span><br />
                First Contact: <span>12/01/'18</span>
            </p>
            <h4>Past Request</h4>
            <div class="columns is-multiline">
                <div class="column is-6"><p>12/01/2018 <span>John T. Tolson</span></p></div>
                <div class="column is-6"><p>Spago's Pizza <span>Business Lunch</span></p></div>
            </div>
            <h4>Google Search</h4>
            <div class="field">
                <div class="control">
                  <input class="input" type="text" placeholder="Search in Google">
                </div>
              </div>
        </div>
    </div>
<!--   </body>
</html> -->
@endsection