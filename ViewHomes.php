
<!doctype html>

<html>

<head lang="en">
	<meta charset="UTF-8">
	<title>View Homes</title>
	<link rel="stylesheet" href="fin_style.css">
</head>
<body style="background-color:white">
<header>
        <div class="inner">
            <div class="logo">
                <div>
                    <img src="fin_logo.png" alt="SaleEstate logo" width="170" height="60">
                </div>
            </div>
            <nav>
                <li><span><a href="fin_index.php" class="button">Back</a></span></li>
		    </nav>
	    </div>
	</header>
	<main>
	<h1>VIEW HOMES</h1>
	<div class="center">
	<form method="POST" action="">
                
                    <label>Filters:</label>
                    <select name="price">
                        <option value="50000">Less than $50,000</option>
                        <option value="100000">Less than $100,000</option>
                        <option value="150000">Less than $150,000</option>
                        <option value="200000">Less than $200,000</option>
                        <option value="250000">Less than $250,000</option>
                        <option value="300000">Less than $300,000</option>
                        <option value="350000">Less than $350,000</option>
                        <option value="400000">Less than $400,000</option>
                        <option value="450000">Less than $450,000</option>
                        <option value="500000">Less than $500,000</option>
                        <option value="550000">Less than $550,000</option>
                        <option value="600000">Less than $600,000</option>
                        <option value="1000000">Less than $1,000,000</option>
                    </select>
                    <select name = "age">
                    	<option value = "1900"> Built After 1900</option>
                    	<option value = "1920"> Built After 1920</option>
                    	<option value = "1940"> Built After 1940</option>
                    	<option value = "1960"> Built After 1960</option>
                    	<option value = "1980"> Built After 1980</option>
                    	<option value = "2000"> Built After 2000</option>
                    	<option value = "2020"> Built After 2020</option>

                    </select>
                    <select name="footage">
                        <option value="500"> Less that 500 Square Feet</option>
                        <option value="1000"> Less than 1,000 Square Feet</option>
                        <option value="1500"> Less than 1,500 Square Feet</option>
                        <option value="2000"> Less than 2,000 Square Feet</option>
                        <option value="2500"> Less than 2,500 Square Feet</option>
                        <option value="3000"> Less than 3,000 Square Feet</option>
                        <option value="3500"> Less than 3,500 Square Feet</option>
                        <option value="4000"> Less than 4,000 Square Feet</option>
                        <option value="4500"> Less than 4,500 Square Feet</option>
                        <option value="5000"> Less than 5,000 Square Feet</option>
                        <option value="5500"> Less than 5,500 Square Feet</option>
                        <option value="6000"> Less than 6,000 Square Feet</option>
                        <option value="10000"> Less than 10,000 Square Feet</option>
                    </select>
                    

                    <button class="btn btn-primary" name="filter">Filter</button>
                    <button class="btn btn-success" name="reset">Reset</button>
                
            </form>
            <br /><br />
            <table class="table table-bordered">
                <thead class="alert-info">
                    <th>ID</th>
                    <th>Address</th>
                    <th>Price</th>
                    <th>Year</th>
                    <th>Footage</th>
                    <th>Description</th>
                    
                </thead>
                <thead>
                  

<div class="center">
<tr>
                    <td>1</td>
                    <td>1234 Easy Street Atlanta Ga</td>
                    <td>350000</td>
                    <td>1942</td>
                    <td>1000</td>
                    <td>A nice large and spacious home with 3 beds and 3 baths</td>
                </tr><tr>
                    <td>2</td>
                    <td>1590 Tree Summit Drive Albany Georgia</td>
                    <td>40000</td>
                    <td>1920</td>
                    <td>300</td>
                    <td>Small ruin house</td>
                </tr><tr>
                    <td>3</td>
                    <td>1450 Fake House .com</td>
                    <td>150000</td>
                    <td>19940</td>
                    <td>600</td>
                    <td>smlall house</td>
                </tr><tr>
                    <td>4</td>
                    <td>125134 sa fsfd</td>
                    <td>145000</td>
                    <td>1942</td>
                    <td>1499</td>
                    <td>house</td>
                </tr><tr>
                    <td>5</td>
                    <td>125134 sa fsfd</td>
                    <td>145000</td>
                    <td>1942</td>
                    <td>1499</td>
                    <td>house</td>
                </tr><tr>
                    <td>6</td>
                    <td>dfasfdas</td>
                    <td>1456</td>
                    <td>1232</td>
                    <td>1234</td>
                    <td>asdfasf</td>
                </tr><tr>
                    <td>7</td>
                    <td></td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td></td>
                </tr><tr>
                    <td>8</td>
                    <td></td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td></td>
                </tr></div>
                </thead>
            </table>
    </div>
	</main>
</body>

</html>
