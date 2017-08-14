
<form action="<?php echo $_SERVER['REQUST_URI']; ?>" method="GET">
    <div class="idx-container">
        <div class="idx-searchitem">
            <label>Property Type:</label>
            <select name="idx_propertytype">
                <option value="0">All</option>
                <option value="1" <?php if ($_GET['idx_propertytype'] == 1) echo 'selected' ?>>Single Family Home</option>
                <option value="2" <?php if ($_GET['idx_propertytype'] == 2) echo 'selected' ?>>Multi Family Home</option>
                <option value="3" <?php if ($_GET['idx_propertytype'] == 3) echo 'selected' ?>>Land</option>
            </select>
        </div>
        <div class="idx-searchitem">
            <label>Price Range:</label>
            <select name="idx_pricerange_low">
                <option value="">No Minimum</option>
                <option value="10000" <?php if ($_GET['idx_pricerange_low'] == 10000) echo 'selected' ?>>$10,000</option>
                <option value="20000" <?php if ($_GET['idx_pricerange_low'] == 20000) echo 'selected' ?>>$20,000</option>
                <option value="30000" <?php if ($_GET['idx_pricerange_low'] == 30000) echo 'selected' ?>>$30,000</option>
                <option value="40000" <?php if ($_GET['idx_pricerange_low'] == 40000) echo 'selected' ?>>$40,000</option>
                <option value="50000" <?php if ($_GET['idx_pricerange_low'] == 50000) echo 'selected' ?>>$50,000</option>
                <option value="60000" <?php if ($_GET['idx_pricerange_low'] == 60000) echo 'selected' ?>>$60,000</option>
                <option value="70000" <?php if ($_GET['idx_pricerange_low'] == 70000) echo 'selected' ?>>$70,000</option>
                <option value="80000" <?php if ($_GET['idx_pricerange_low'] == 80000) echo 'selected' ?>>$80,000</option>
                <option value="90000" <?php if ($_GET['idx_pricerange_low'] == 90000) echo 'selected' ?>>$90,000</option>
                <option value="100000" <?php if ($_GET['idx_pricerange_low'] == 100000) echo 'selected' ?>>$100,000</option>
                <option value="125000" <?php if ($_GET['idx_pricerange_low'] == 125000) echo 'selected' ?>>$125,000</option>
                <option value="150000" <?php if ($_GET['idx_pricerange_low'] == 150000) echo 'selected' ?>>$150,000</option>
                <option value="175000" <?php if ($_GET['idx_pricerange_low'] == 175000) echo 'selected' ?>>$175,000</option>
                <option value="200000" <?php if ($_GET['idx_pricerange_low'] == 200000) echo 'selected' ?>>$200,000</option>
                <option value="225000" <?php if ($_GET['idx_pricerange_low'] == 225000) echo 'selected' ?>>$225,000</option>
                <option value="250000" <?php if ($_GET['idx_pricerange_low'] == 250000) echo 'selected' ?>>$250,000</option>
                <option value="275000" <?php if ($_GET['idx_pricerange_low'] == 275000) echo 'selected' ?>>$275,000</option>
                <option value="300000" <?php if ($_GET['idx_pricerange_low'] == 300000) echo 'selected' ?>>$300,000</option>
                <option value="350000" <?php if ($_GET['idx_pricerange_low'] == 350000) echo 'selected' ?>>$350,000</option>
                <option value="400000" <?php if ($_GET['idx_pricerange_low'] == 400000) echo 'selected' ?>>$400,000</option>
                <option value="450000" <?php if ($_GET['idx_pricerange_low'] == 450000) echo 'selected' ?>>$450,000</option>
                <option value="500000" <?php if ($_GET['idx_pricerange_low'] == 500000) echo 'selected' ?>>$500,000</option>
                <option value="550000" <?php if ($_GET['idx_pricerange_low'] == 550000) echo 'selected' ?>>$550,000</option>
                <option value="600000" <?php if ($_GET['idx_pricerange_low'] == 600000) echo 'selected' ?>>$600,000</option>
                <option value="650000" <?php if ($_GET['idx_pricerange_low'] == 650000) echo 'selected' ?>>$650,000</option>
                <option value="700000" <?php if ($_GET['idx_pricerange_low'] == 700000) echo 'selected' ?>>$700,000</option>
                <option value="750000" <?php if ($_GET['idx_pricerange_low'] == 750000) echo 'selected' ?>>$750,000</option>
                <option value="800000" <?php if ($_GET['idx_pricerange_low'] == 800000) echo 'selected' ?>>$800,000</option>
                <option value="850000" <?php if ($_GET['idx_pricerange_low'] == 850000) echo 'selected' ?>>$850,000</option>
                <option value="900000" <?php if ($_GET['idx_pricerange_low'] == 900000) echo 'selected' ?>>$900,000</option>
                <option value="950000" <?php if ($_GET['idx_pricerange_low'] == 950000) echo 'selected' ?>>$950,000</option>
                <option value="1000000" <?php if ($_GET['idx_pricerange_low'] == 1000000) echo 'selected' ?>>$1,000,000</option>
                <option value="2000000" <?php if ($_GET['idx_pricerange_low'] == 2000000) echo 'selected' ?>>$2,000,000</option>
                <option value="3000000" <?php if ($_GET['idx_pricerange_low'] == 3000000) echo 'selected' ?>>$3,000,000</option>
                <option value="4000000" <?php if ($_GET['idx_pricerange_low'] == 4000000) echo 'selected' ?>>$4,000,000</option>
                <option value="5000000" <?php if ($_GET['idx_pricerange_low'] == 5000000) echo 'selected' ?>>$5,000,000</option>
                <option value="6000000" <?php if ($_GET['idx_pricerange_low'] == 6000000) echo 'selected' ?>>$6,000,000</option>
                <option value="7000000" <?php if ($_GET['idx_pricerange_low'] == 7000000) echo 'selected' ?>>$7,000,000</option>
                <option value="8000000" <?php if ($_GET['idx_pricerange_low'] == 8000000) echo 'selected' ?>>$8,000,000</option>
                <option value="9000000" <?php if ($_GET['idx_pricerange_low'] == 9000000) echo 'selected' ?>>$9,000,000</option>
            </select>
            &nbsp;to&nbsp;
            <select name="idx_pricerange_high">
                <option value="">No Maximum</option>
                <option value="10000" <?php if ($_GET['idx_pricerange_high'] == 10000) echo 'selected' ?>>$10,000</option>
                <option value="20000" <?php if ($_GET['idx_pricerange_high'] == 20000) echo 'selected' ?>>$20,000</option>
                <option value="30000" <?php if ($_GET['idx_pricerange_high'] == 30000) echo 'selected' ?>>$30,000</option>
                <option value="40000" <?php if ($_GET['idx_pricerange_high'] == 40000) echo 'selected' ?>>$40,000</option>
                <option value="50000" <?php if ($_GET['idx_pricerange_high'] == 50000) echo 'selected' ?>>$50,000</option>
                <option value="60000" <?php if ($_GET['idx_pricerange_high'] == 60000) echo 'selected' ?>>$60,000</option>
                <option value="70000" <?php if ($_GET['idx_pricerange_high'] == 70000) echo 'selected' ?>>$70,000</option>
                <option value="80000" <?php if ($_GET['idx_pricerange_high'] == 80000) echo 'selected' ?>>$80,000</option>
                <option value="90000" <?php if ($_GET['idx_pricerange_high'] == 90000) echo 'selected' ?>>$90,000</option>
                <option value="100000" <?php if ($_GET['idx_pricerange_high'] == 100000) echo 'selected' ?>>$100,000</option>
                <option value="125000" <?php if ($_GET['idx_pricerange_high'] == 125000) echo 'selected' ?>>$125,000</option>
                <option value="150000" <?php if ($_GET['idx_pricerange_high'] == 150000) echo 'selected' ?>>$150,000</option>
                <option value="175000" <?php if ($_GET['idx_pricerange_high'] == 175000) echo 'selected' ?>>$175,000</option>
                <option value="200000" <?php if ($_GET['idx_pricerange_high'] == 200000) echo 'selected' ?>>$200,000</option>
                <option value="225000" <?php if ($_GET['idx_pricerange_high'] == 225000) echo 'selected' ?>>$225,000</option>
                <option value="250000" <?php if ($_GET['idx_pricerange_high'] == 250000) echo 'selected' ?>>$250,000</option>
                <option value="275000" <?php if ($_GET['idx_pricerange_high'] == 275000) echo 'selected' ?>>$275,000</option>
                <option value="300000" <?php if ($_GET['idx_pricerange_high'] == 300000) echo 'selected' ?>>$300,000</option>
                <option value="350000" <?php if ($_GET['idx_pricerange_high'] == 350000) echo 'selected' ?>>$350,000</option>
                <option value="400000" <?php if ($_GET['idx_pricerange_high'] == 400000) echo 'selected' ?>>$400,000</option>
                <option value="450000" <?php if ($_GET['idx_pricerange_high'] == 450000) echo 'selected' ?>>$450,000</option>
                <option value="500000" <?php if ($_GET['idx_pricerange_high'] == 500000) echo 'selected' ?>>$500,000</option>
                <option value="550000" <?php if ($_GET['idx_pricerange_high'] == 550000) echo 'selected' ?>>$550,000</option>
                <option value="600000" <?php if ($_GET['idx_pricerange_high'] == 600000) echo 'selected' ?>>$600,000</option>
                <option value="650000" <?php if ($_GET['idx_pricerange_high'] == 650000) echo 'selected' ?>>$650,000</option>
                <option value="700000" <?php if ($_GET['idx_pricerange_high'] == 700000) echo 'selected' ?>>$700,000</option>
                <option value="750000" <?php if ($_GET['idx_pricerange_high'] == 750000) echo 'selected' ?>>$750,000</option>
                <option value="800000" <?php if ($_GET['idx_pricerange_high'] == 800000) echo 'selected' ?>>$800,000</option>
                <option value="850000" <?php if ($_GET['idx_pricerange_high'] == 850000) echo 'selected' ?>>$850,000</option>
                <option value="900000" <?php if ($_GET['idx_pricerange_high'] == 900000) echo 'selected' ?>>$900,000</option>
                <option value="950000" <?php if ($_GET['idx_pricerange_high'] == 950000) echo 'selected' ?>>$950,000</option>
                <option value="1000000" <?php if ($_GET['idx_pricerange_high'] == 1000000) echo 'selected' ?>>$1,000,000</option>
                <option value="2000000" <?php if ($_GET['idx_pricerange_high'] == 2000000) echo 'selected' ?>>$2,000,000</option>
                <option value="3000000" <?php if ($_GET['idx_pricerange_high'] == 3000000) echo 'selected' ?>>$3,000,000</option>
                <option value="4000000" <?php if ($_GET['idx_pricerange_high'] == 4000000) echo 'selected' ?>>$4,000,000</option>
                <option value="5000000" <?php if ($_GET['idx_pricerange_high'] == 5000000) echo 'selected' ?>>$5,000,000</option>
                <option value="6000000" <?php if ($_GET['idx_pricerange_high'] == 6000000) echo 'selected' ?>>$6,000,000</option>
                <option value="7000000" <?php if ($_GET['idx_pricerange_high'] == 7000000) echo 'selected' ?>>$7,000,000</option>
                <option value="8000000" <?php if ($_GET['idx_pricerange_high'] == 8000000) echo 'selected' ?>>$8,000,000</option>
                <option value="9000000" <?php if ($_GET['idx_pricerange_high'] == 9000000) echo 'selected' ?>>$9,000,000</option>
            </select>
        </div>
        <div class="idx-searchitem">
            <label>Bedrooms:</label>
            <select name="idx_bedrooms">
                <option value="0">Any</option>
                <option value="1" <?php if ($_GET['idx_bedrooms'] == 1) echo 'selected' ?>>1</option>
                <option value="2" <?php if ($_GET['idx_bedrooms'] == 2) echo 'selected' ?>>2</option>
                <option value="3" <?php if ($_GET['idx_bedrooms'] == 3) echo 'selected' ?>>3</option>
                <option value="4" <?php if ($_GET['idx_bedrooms'] == 4) echo 'selected' ?>>4+</option>
            </select>
        </div>
        <div class="idx-searchitem">
            <label>Bathrooms:</label>
            <select name="idx_bathrooms">
                <option value="0">Any</option>
                <option value="1" <?php if ($_GET['idx_bathrooms'] == 1) echo 'selected' ?>>1</option>
                <option value="2" <?php if ($_GET['idx_bathrooms'] == 2) echo 'selected' ?>>2</option>
                <option value="3" <?php if ($_GET['idx_bathrooms'] == 3) echo 'selected' ?>>3</option>
                <option value="4" <?php if ($_GET['idx_bathrooms'] == 4) echo 'selected' ?>>4+</option>
            </select>
        </div>
        <div class="idx-searchitem">
            <label>Square Feet:</label>
            <select name="idx_sqft">
                <option value="0">Any</option>
                <option value="500" <?php if ($_GET['idx_sqft'] == 500) echo 'selected' ?>>500 or more</option>
                <option value="600" <?php if ($_GET['idx_sqft'] == 600) echo 'selected' ?>>600 or more</option>
                <option value="700" <?php if ($_GET['idx_sqft'] == 700) echo 'selected' ?>>700 or more</option>
                <option value="800" <?php if ($_GET['idx_sqft'] == 800) echo 'selected' ?>>800 or more</option>
                <option value="900" <?php if ($_GET['idx_sqft'] == 900) echo 'selected' ?>>900 or more</option>
                <option value="1000" <?php if ($_GET['idx_sqft'] == 1000) echo 'selected' ?>>1000 or more</option>
                <option value="1100" <?php if ($_GET['idx_sqft'] == 1100) echo 'selected' ?>>1100 or more</option>
                <option value="1200" <?php if ($_GET['idx_sqft'] == 1200) echo 'selected' ?>>1200 or more</option>
                <option value="1300" <?php if ($_GET['idx_sqft'] == 1300) echo 'selected' ?>>1300 or more</option>
                <option value="1400" <?php if ($_GET['idx_sqft'] == 1400) echo 'selected' ?>>1400 or more</option>
                <option value="1500" <?php if ($_GET['idx_sqft'] == 1500) echo 'selected' ?>>1500 or more</option>
                <option value="1600" <?php if ($_GET['idx_sqft'] == 1600) echo 'selected' ?>>1600 or more</option>
                <option value="1700" <?php if ($_GET['idx_sqft'] == 1700) echo 'selected' ?>>1700 or more</option>
                <option value="1800" <?php if ($_GET['idx_sqft'] == 1800) echo 'selected' ?>>1800 or more</option>
                <option value="1900" <?php if ($_GET['idx_sqft'] == 1900) echo 'selected' ?>>1900 or more</option>
                <option value="2000" <?php if ($_GET['idx_sqft'] == 2000) echo 'selected' ?>>2000 or more</option>
                <option value="2500" <?php if ($_GET['idx_sqft'] == 2500) echo 'selected' ?>>2500 or more</option>
                <option value="3000" <?php if ($_GET['idx_sqft'] == 3000) echo 'selected' ?>>3000 or more</option>
                <option value="3500" <?php if ($_GET['idx_sqft'] == 3500) echo 'selected' ?>>3500 or more</option>
                <option value="4000" <?php if ($_GET['idx_sqft'] == 4000) echo 'selected' ?>>4000 or more</option>
                <option value="4500" <?php if ($_GET['idx_sqft'] == 4500) echo 'selected' ?>>4500 or more</option>
                <option value="5000" <?php if ($_GET['idx_sqft'] == 5000) echo 'selected' ?>>5000 or more</option>
                <option value="5500" <?php if ($_GET['idx_sqft'] == 5500) echo 'selected' ?>>5500 or more</option>
                <option value="6000" <?php if ($_GET['idx_sqft'] == 6000) echo 'selected' ?>>6000 or more</option>
                <option value="6500" <?php if ($_GET['idx_sqft'] == 6500) echo 'selected' ?>>6500 or more</option>
                <option value="7000" <?php if ($_GET['idx_sqft'] == 7000) echo 'selected' ?>>7000 or more</option>
                <option value="7500" <?php if ($_GET['idx_sqft'] == 7500) echo 'selected' ?>>7500 or more</option>
            </select>
        </div>
        <div class="idx-searchitem">
            <label>Garage:</label>
            <select name="idx_garage">
                <option value="0">Any</option>
                <option value="1" <?php if ($_GET['idx_garage'] == 1) echo 'selected' ?>>1</option>
                <option value="2" <?php if ($_GET['idx_garage'] == 2) echo 'selected' ?>>2</option>
                <option value="3" <?php if ($_GET['idx_garage'] == 3) echo 'selected' ?>>3</option>
                <option value="4" <?php if ($_GET['idx_garage'] == 4) echo 'selected' ?>>4+</option>
            </select>
        </div>
        <div class="idx-searchitem">
            <label>Show Only:</label>
            <div class="idx-searchitem-content">
                <div class="idx-containeditem"><input type="checkbox" name="idx_shortsale" value"1" <?php if ($_GET['idx_shortsale'] == 1) echo 'checked="yes"' ?>/>&nbsp;Short Sales</div>
                <div class="idx-containeditem"><input type="checkbox" name="idx_vtours" value"1" <?php if ($_GET['idx_vtours'] == 1) echo 'checked="yes"' ?>/>&nbsp;Only with Virtual Tours</div>
                <!-- <div class="idx-containeditem"><input type="checkbox" name="idx_foreclosure" value"1" />&nbsp;Foreclosures</div> -->
            </div>
        </div>
        <div class="idx-searchitem">
            <label>Sort By:</label>
            <select name="idx_sort">
                <option value="ASC" <?php if ($_GET['idx_sort'] == 'ASC') echo 'selected' ?>>Price (Low to High)</option>
                <option value="DESC" <?php if ($_GET['idx_sort'] == 'DESC') echo 'selected' ?>>Price (High to Low)</option>
            </select>
        </div>
        <div class="idx-searchitem">
            <label>Results per Page:</label>
            <select name="idx_results">
                <option value="10" <?php if ($_GET['idx_results'] == 10) echo 'selected' ?>>10</option>
                <option value="25" <?php if ($_GET['idx_results'] == 25) echo 'selected' ?>>25</option>
            </select>
        </div>
        <div class="idx-searchitem">
            <label>City:</label>
            <table width="300">
                <?php $options = get_option('getyouridx_citycache'); ?>
                <?php $col = ceil(count($options) / 2); ?>
                <tr>
                    <td width="150" valign="top">
                        <?php for($i = 0; $i <= $col; $i++): ?>
                            <input type="checkbox" name="idx_city[]" value="<?php echo $options[$i]; ?>" <?php if (isset($_GET['idx_city'])): ?><?php if (in_array($options[$i], $_GET['idx_city'])): ?>checked<?php endif; ?><?php endif; ?>/> <?php echo $options[$i]; ?><br />
                        <?php endfor; ?>
                    </td>
                    <td width="150" valign="top">
                        <?php for($i = ($col + 1); $i <= count($options) - 1; $i++): ?>
                            <input type="checkbox" name="idx_city[]" value="<?php echo $options[$i]; ?>" <?php if (isset($_GET['idx_city'])): ?><?php if (in_array($options[$i], $_GET['idx_city'])): ?>checked<?php endif; ?><?php endif; ?>/> <?php echo $options[$i]; ?><br />
                        <?php endfor; ?>
                    </td>
                </tr>
            </table>
        </div>
        <div class="idx-buttons">
            <input type="hidden" name="getyouridx_postback" value="1" />
            <div class="buttons">
                <button>
                    <img src="<?php echo get_bloginfo('wpurl') . '/wp-content/plugins/' . basename(dirname(__FILE__)) ?>/magnifier.png" width="16" height="16" />
                    Search
                </button>
            </div>
        </div>
    </div>
</form>