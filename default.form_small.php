<div class="pad">
    
    <form action="<?php echo $_SERVER['REQUST_URI']; ?>" method="GET">
        <div class="idx-container">
            <div class="idx-searchitem">
                <select name="idx_propertytype">
                    <option value="0">- Property Type</option>
                    <option value="0">All</option>
                    <option value="1" <?php if ($_GET['idx_propertytype'] == 1) echo 'selected' ?>>Single Family Home</option>
                    <option value="2" <?php if ($_GET['idx_propertytype'] == 2) echo 'selected' ?>>Multi Family Home</option>
                    <option value="3" <?php if ($_GET['idx_propertytype'] == 3) echo 'selected' ?>>Land</option>
                </select>
            </div>
            <div class="idx-searchitem">
                <label>Suburb or Zip Code:</label>
                <input type="text" name="idx_suburb" />
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
            </div>
            <div class="idx-searchitem">
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
                <?php $options = get_option('getyouridx_citycache'); ?>
                <select name="idx_city" size="5">
                    <?php for($i = 0; $i <= count($options) - 1; $i++): ?>
                        <option value="<?php echo $options[$i]; ?>" <?php if (isset($_GET['idx_city'])): ?><?php if (in_array($options[$i], $_GET['idx_city'])): ?>checked<?php endif; ?><?php endif; ?>><?php echo $options[$i]; ?></option>
                    <?php endfor; ?>
                </select>
            </div>
            <div class="idx-buttons" style="margin-left: 0;">
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
    
</div>