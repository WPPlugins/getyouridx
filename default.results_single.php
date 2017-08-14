<p><a href="<?php echo $_SERVER['REQUST_URI']; ?>?<?php echo str_replace('&mlsnumber=' . $_GET['mlsnumber'], '', $_SERVER['QUERY_STRING']); ?>">Back to Search Results</a></p>

<b><?php echo $result->Results->item->street1; ?>, <?php echo $result->Results->item->city; ?>, <?php echo $result->Results->item->state; ?> <?php echo $result->Results->item->zip_code; ?></b>

<table border="0" width="100%">
    <tr>
        <td rowspan="8" valign="top" align="center">
            <div class="propertyimages">
                <img src="<?php echo (!empty($result->Results->item->photos->item)) ? $result->Results->item->photos->item : get_bloginfo('wpurl') . '/wp-content/plugins/' . basename(dirname(__FILE__)) . '/empty.jpg'; ?>" width="150" alt="" name="mainimage" />
                <?php foreach($result->Results->item->photos->item as $photo): ?>
                    <a rel="prettyPhoto" href="<?php echo $photo; ?>"><img src="<?php echo $photo; ?>" width="64" align="left" onmouseover="document['mainimage'].src='<?php echo $photo; ?>';" /></a>
                <?php endforeach; ?>
            </div>
        </td>
        <td><b><?php echo (isset($result->Results->item->asking_price)) ? '$' . number_format($result->Results->item->asking_price, 0) : 'n/a'; ?></b></td>
    </tr>
    <tr>
        <td valign="top">
            <div class="idx-resultlabel"><label>MLS #:</label><?php echo (!empty($result->Results->item->mls_number)) ? $result->Results->item->mls_number : 'n/a'; ?></div>
            <div class="idx-resultlabel"><label>Beds:</label><?php echo (!empty($result->Results->item->bedrooms)) ? number_format($result->Results->item->bedrooms, 0) : 'n/a'; ?></div>
            <div class="idx-resultlabel"><label>Baths:</label><?php echo (!empty($result->Results->item->bathrooms)) ? number_format($result->Results->item->bathrooms, 0) : 'n/a'; ?></div>
            <div class="idx-resultlabel"><label>Sq Ft:</label><?php echo (!empty($result->Results->item->sqft)) ? $result->Results->item->sqft : 'n/a'; ?></div>
            <div class="idx-resultlabel"><label>Year Built:</label><?php echo (!empty($result->Results->item->year_built)) ? $result->Results->item->year_built : 'n/a'; ?></div>
            <div class="idx-resultlabel"><label>Type:</label><?php echo (!empty($result->Results->item->setting)) ? $result->Results->item->setting : 'n/a'; ?></div>
            <div class="idx-resultlabel"><label>Acreage:</label><?php echo (!empty($result->Results->item->acreage)) ? $result->Results->item->acreage : 'n/a'; ?></div>
        </td>
    </tr>
    <tr>
        <td>
            <div class="x-resultdescription">&nbsp;</div>
        </td>
    </tr>
    <tr>
        <td>
            <div class="x-resultdescription"><?php echo $result->Results->item->description; ?></div>
        </td>
    </tr>
    <tr>
        <td>
            <div class="x-resultdescription">&nbsp;</div>
        </td>
    </tr>
    <tr>
        <td>
            <div class="buttons">
                <a rel="prettyPhoto[flash]" href="<?php echo get_bloginfo('wpurl') . '/wp-content/plugins/' . basename(dirname(__FILE__)) ?>/map.swf?width=550&height=400&flashvars=key=<?php echo get_option('gmaps_api_key'); ?>&amp;address=<?php echo urlencode($result->Results->item->street1 . ' ' . $result->Results->item->city . ' ' . $result->Results->item->state . ' ' . $$result->Results->item->zip_code); ?>" title="Map of <?php echo $result->Results->item->street1; ?>, <?php echo $result->Results->item->city; ?>, <?php echo $result->Results->item->state; ?> <?php echo $result->Results->item->zip_code; ?>">
                    <img src="<?php echo get_bloginfo('wpurl') . '/wp-content/plugins/' . basename(dirname(__FILE__)) ?>/map.png" width="16" height="16" />
                    Map
                </a>
                <?php if (!empty($result->Results->item->vtour_unbranded)): ?>
                <a rel="" href="<?php echo $result->Results->item->vtour_unbranded; ?>" title="Virtual Tour">
                    <img src="<?php echo get_bloginfo('wpurl') . '/wp-content/plugins/' . basename(dirname(__FILE__)) ?>/film_link.png" width="16" height="16" />
                    Virtual Tour
                </a>
                <?php endif; ?>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div class="x-resultdescription">&nbsp;</div>
        </td>
    </tr>
    <tr>
        <td>
            <div class="x-resultdescription">
                <?php
                //
                // REMOVING THE 'Listing provided by:' line is a breach of the T&C's between you and your MLS
                //
                ?>
                <p class="idx-footer">
                    Listing provided by: <?php echo (!empty($result->Results->item->agent_name)) ? $result->Results->item->agent_name . ', ' : '' ?><?php echo $result->Results->item->agent_company; ?><br />
                    <a href="http://www.getyouridx.com/">IDX Services</a> provided by <a href="http://www.getyouridx.com/">GetYourIDX</a>.
                </p>
                <p class="idx-footer">
                    Information being provided is for consumers' personal, non-commercial use and may not be used for any purpose other than to identify prospective properties consumers may be interested in purchasing. Information deemed reliable but not guaranteed
                </p>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div class="x-resultdescription">&nbsp;</div>
        </td>
    </tr>
</table>

<script type="text/javascript" charset="utf-8"> 
    $(document).ready(function(){
        $(".buttons a[rel^='prettyPhoto']").prettyPhoto({theme: 'light_rounded'});
        $(".propertyimages a[rel^='prettyPhoto']").prettyPhoto({theme: 'light_rounded'});
    });
</script>
