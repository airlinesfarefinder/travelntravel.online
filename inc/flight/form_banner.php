<style>
  .banner {
    padding: 30px 20px;
    color: white;
    text-align: center;
    /* background-color: #0073ce; */
    width: 100%;
    /* min-height:600px; */

    margin-top: 50px;
background:linear-gradient(135deg, #0072c6 0%, #00b9da 100%);
  }

  .banner h1 {
    font-size: 4rem;
    margin-bottom: 30px;
    font-weight: 700;
  }

  .options-bar {
    display: flex;
    justify-content: flex-start;
    gap: 20px;
    flex-wrap: wrap;
    margin-bottom: 20px;
    margin-top: 40px;
    /* padding-left:146px; */

    max-width: 1100px !important;
    margin-inline: auto;
  }

  .high {

    background-color: #d60b52;
    color: white;

    padding: 5px;
    border-radius: 5px;
    cursor: pointer;

    font-size: 4rem;
    margin-bottom: 30px;
    font-weight: 700;
  }

  #tripTypeLabel {
    color: #fff;
  }

  #travelerLabel {
    color: #fff;
  }

  #cabinLabel {
    color: #fff;
  }

  .dropdown {
    position: relative;
    color: white;
    font-weight: bold;
    cursor: pointer;

  }

  .dropdown::after {
    content: "▼";
    font-size: 10px;
    margin-left: 5px;
  }

  .dropdown-content {
    display: none;
    position: absolute;
    background-color: white;
    color: black;
    min-width: 200px;
    top: 30px;
    left: 0;
    z-index: 100;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    border-radius: 5px;
    padding: 10px;
  }

  .dropdown-content.active {
    display: block;
  }

  .dropdown-content label {
    display: flex;
    justify-content: space-between;
    margin: 8px 0;
    font-size: 14px;
  }

  .search-box {
    background-color: #fff;
    max-width: 1100px;
    margin: auto;
    border-radius: 6px;
    overflow: hidden;
    display: flex;
    flex-wrap: wrap;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
  }

  .field {
    flex: 1 1 200px;
    padding: 15px 20px;
    border-right: 1px solid #eee;
  }

  .field:last-child {
    border-right: none;
  }

  .field label {
    display: block;
    font-size: 12px;
    color: #777;
    margin-bottom: 4px;
    text-align: left;
  }

  .field input {
    width: 100%;
    border: none;
    font-weight: bold;
    color: #333;
    font-size: 15px;
    outline: none;
  }

  .search-button {
    margin-top: 20px;
    display: flex;
    justify-content: center;
  }

  .search-button button {
    background-color: #d60b52;
    color: white;
    border: none;
    font-size: 16px;
    padding: 15px 25px;
    border-radius: 4px;
    cursor: pointer;
  }

  @media (max-width: 768px) {
     .banner {

      margin-top:0px !important;
    }

    
    .banner h1 {
      font-size: 1.8rem;
      margin-top:0px !important;
    }


    
  .high {

    background-color: #d60b52;
    color: white;

    padding: 5px;
    border-radius: 5px;
    cursor: pointer;

    font-size: 2rem;
    margin-bottom: 30px;
    font-weight: 700;
  }

    .search-box {
      flex-direction: column;
    }

    .field {
      border-right: none;
      border-bottom: 1px solid #eee;
    }

    .field:last-child {
      border-bottom: none;
    }

.dropdown-content-economy {
    display: none;
    position: absolute;
    background-color: white;
    color: black;
    min-width: 180px;
    top: 30px;
    left: -50px;
    z-index: 100;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    border-radius: 5px;
    padding: 10px;
    text-align: left;
  }

  
  /* .dropdown-content label {
    display: flex;
    justify-content:flex-start;
    margin: 8px 0;
    margin-left:4px;
    font-size: 14px;
  } */


    .radio-list label,
  .counter-row {
    display: flex;
    justify-content: left !important;
    align-items: center;
    margin: 8px 0px;
    gap:5px;
  }

   .radio-list label,
  .counter-row {
    display: flex;
    justify-content: left !important;
    align-items: center;
    margin: 8px 0px;
  }



  .field {
    flex: 1 1 20px;
    padding: 15px 20px;
    border-right: 1px solid #eee;
  }

  }

  .radio-list label,
  .counter-row {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin: 8px 0;
  }

  .counter-row button {
    background: none;
    border: 1px solid #ccc;
    width: 25px;
    height: 25px;
    border-radius: 50%;
    cursor: pointer;
  }

  .counter-row span {
    margin: 0 10px;
    min-width: 10px;
    text-align: center;
  }

  .done-button {
    text-align: center;
    margin-top: 10px;
    color: #0073ce;
    font-weight: bold;
    cursor: pointer;
  }
</style>


<div class="banner">
  <h1>Search, <span class="high">Compare Flights</span> & Save</h1>

  <div class="options-bar">
    <div class="dropdown" onclick="toggleDropdown('tripTypeDropdown')">
      <span id="tripTypeLabel">Round Trip</span>
      <div class="dropdown-content" id="tripTypeDropdown">
        <div class="radio-list">
          <label><input type="radio" name="trip" value="round" checked onchange="setTripType('Round Trip')"> Round Trip</label>
          <label><input type="radio" name="trip" value="oneway" onchange="setTripType('One Way')"> One Way</label>
        </div>
      </div>
    </div>

    <div class="dropdown" onclick="toggleDropdown('travelerDropdown')">
      <span id="travelerLabel">1 Traveler</span>
      <div class="dropdown-content" id="travelerDropdown">
        <div class="counter-row">Adults <div><button onclick="adjustCount('adults', -1)">−</button><span id="adultsCount">1</span><button onclick="adjustCount('adults', 1)">+</button></div>
        </div>
        <div class="counter-row">Children <div><button onclick="adjustCount('children', -1)">−</button><span id="childrenCount">0</span><button onclick="adjustCount('children', 1)">+</button></div>
        </div>
        <div class="counter-row">Infants <div><button onclick="adjustCount('infants', -1)">−</button><span id="infantsCount">0</span><button onclick="adjustCount('infants', 1)">+</button></div>
        </div>
        <div class="done-button" onclick="closeDropdown('travelerDropdown')">Done</div>
      </div>
    </div>

    <div class="dropdown" onclick="toggleDropdown('cabinDropdown')">
      <span id="cabinLabel">Economy</span>
      <div class="dropdown-content  dropdown-content-economy" id="cabinDropdown">
        <div class="radio-list">
          <label><input type="radio" name="cabin" value="Economy" checked onchange="setCabin('Economy')"> Economy</label>
          <label><input type="radio" name="cabin" value="Premium" onchange="setCabin('Premium')"> Premium</label>
          <label><input type="radio" name="cabin" value="Business" onchange="setCabin('Business')"> Business class</label>
          <label><input type="radio" name="cabin" value="First" onchange="setCabin('First')"> First class</label>
        </div>
      </div>
    </div>
  </div>

  <div class="search-box">
    <div class="field">
      <label>Depart From</label>
      <input type="text" placeholder="Enter a city or airport" />
    </div>
    <div class="field">
      <label>Your Destination</label>
      <input type="text" placeholder="Enter a city or airport" />
    </div>
    <div class="field">
      <label>Depart Date</label>
      <input type="date" />
    </div>
    <div class="field" id="returnDateField">
      <label>Return Date</label>
      <input type="date" />
    </div>
  </div>

  <div class="search-button">
    <button>Find Flights ✈</button>
  </div>
</div>

<script>
  function toggleDropdown(id) {
    document.querySelectorAll('.dropdown-content').forEach(el => {
      if (el.id !== id) el.classList.remove('active');
    });
    const dropdown = document.getElementById(id);
    dropdown.classList.toggle('active');
  }

  function setTripType(type) {
    document.getElementById('tripTypeLabel').textContent = type;
    document.getElementById('tripTypeDropdown').classList.remove('active');
    document.getElementById('returnDateField').style.display = (type === "Round Trip") ? "block" : "none";
  }

  function adjustCount(type, change) {
    const el = document.getElementById(`${type}Count`);
    let count = parseInt(el.textContent);
    count = Math.max(0, count + change);
    if (type === "adults") count = Math.max(1, count);
    el.textContent = count;

    const total = parseInt(document.getElementById('adultsCount').textContent) +
      parseInt(document.getElementById('childrenCount').textContent) +
      parseInt(document.getElementById('infantsCount').textContent);
    document.getElementById('travelerLabel').textContent = `${total} Traveler${total > 1 ? 's' : ''}`;
  }

  function setCabin(type) {
    document.getElementById('cabinLabel').textContent = type;
    document.getElementById('cabinDropdown').classList.remove('active');
  }

  function closeDropdown(id) {
    document.getElementById(id).classList.remove('active');
  }

  // Close dropdown on click outside
  document.addEventListener('click', function(e) {
    if (!e.target.closest('.dropdown')) {
      document.querySelectorAll('.dropdown-content').forEach(el => el.classList.remove('active'));
    }
  });
</script>