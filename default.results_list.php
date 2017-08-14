<?php if(!empty($results->error)): ?>
    <div class="idx-error">
        <div class="idx-error-content">
            <?php echo $results->error; ?>
        </div>
    </div>
<?php else: ?>
    <?php if(empty($results->Results->item)): ?>
        <div class="idx-information">
            <div class="idx-information-content">
                There are no results for the selected criteria
            </div>
        </div>
    <?php else: ?>
        <div class="idx-pager idx-pager-top">
            <?php if (isset($_GET['offset'])): ?>
            <div class="idx-left"><a href="<?php echo $_SERVER['REQUST_URI']; ?>?<?php echo str_replace('&offset=' . $_GET['offset'], '', $_SERVER['QUERY_STRING']); ?> &offset=<?php echo $_GET['offset'] - $_GET['idx_results']; ?>">&lt;&lt; Prev</a></div>
            <?php endif; ?>
            <div class="idx-right"><a href="<?php echo $_SERVER['REQUST_URI']; ?>?<?php echo str_replace('&offset=' . $_GET['offset'], '', $_SERVER['QUERY_STRING']); ?> &offset=<?php echo $_GET['offset'] + $_GET['idx_results']; ?>">&gt;&gt; Next</a></div>
        </div>
        <table border="0" width="100%">
            <?php foreach ($results->Results->item as $property): ?>
                <tr>
                    <td rowspan="4" valign="top"><img src="<?php echo (!empty($property->photos->item)) ? $property->photos->item : get_bloginfo('wpurl') . '/wp-content/plugins/' . basename(dirname(__FILE__)) . '/empty.jpg'; ?>" width="150" alt="" /></td>
                    <td><b><?php echo $property->street1; ?>, <?php echo $property->city; ?>, <?php echo $property->state; ?> <?php echo $property->zip_code; ?></b></td>
                </tr>
                <tr>
                    <td valign="top">
                        <div class="idx-right">
                            <div class="idx-resultlabel"><label>Price:</label><?php echo (isset($property->asking_price)) ? '$' . number_format($property->asking_price, 0) : 'n/a'; ?></div>
                            <div class="idx-resultlabel"><label>MLS #:</label><?php echo (isset($property->mls_number)) ? $property->mls_number : 'n/a'; ?></div>
                        </div>
                        <div class="idx-resultlabel"><label>Beds:</label><?php echo (isset($property->bedrooms)) ? number_format($property->bedrooms, 0) : 'n/a'; ?></div>
                        <div class="idx-resultlabel"><label>Baths:</label><?php echo (isset($property->bathrooms)) ? number_format($property->bathrooms, 0) : 'n/a'; ?></div>
                        <div class="idx-resultlabel"><label>Sq Ft:</label><?php echo (isset($property->sqft)) ? $property->sqft : 'n/a'; ?></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="x-resultdescription"><?php echo (!empty($property->description)) ? string_limit_words($property->description, 15) . '&hellip;' : 'No Description'; ?></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="buttons">
                            <a href="<?php echo $_SERVER['REQUEST_URI']; ?>?<?php echo $_SERVER['QUERY_STRING']; ?>&mlsnumber=<?php echo $property->mls_id . ':' . $property->mls_number; ?>" class="positive">
                                <img src="<?php echo get_bloginfo('wpurl') . '/wp-content/plugins/' . basename(dirname(__FILE__)) ?>/arrow_right.png" width="16" height="16" />
                                More Information
                            </a>
                            <a rel="prettyPhoto[flash]" href="<?php echo get_bloginfo('wpurl') . '/wp-content/plugins/' . basename(dirname(__FILE__)) ?>/map.swf?width=550&height=400&flashvars=key=<?php echo get_option('gmaps_api_key'); ?>&amp;address=<?php echo urlencode($property->street1 . ' ' . $property->city . ' ' . $property->state . ' ' . $property->zip_code); ?>" title="Map of <?php echo $property->street1; ?>, <?php echo $property->city; ?>, <?php echo $property->state; ?> <?php echo $property->zip_code; ?>">
                                <img src="<?php echo get_bloginfo('wpurl') . '/wp-content/plugins/' . basename(dirname(__FILE__)) ?>/map.png" width="16" height="16" />
                                Map
                            </a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
            <?php endforeach; ?>
        </table>
        <div class="idx-pager idx-pager-bottom">
            <?php if (isset($_GET['offset'])): ?>
            <div class="idx-left"><a href="<?php echo $_SERVER['REQUST_URI']; ?>?<?php echo str_replace('&offset=' . $_GET['offset'], '', $_SERVER['QUERY_STRING']); ?> &offset=<?php echo $_GET['offset'] - $_GET['idx_results']; ?>">&lt;&lt; Prev</a></div>
            <?php endif; ?>
            <div class="idx-right"><a href="<?php echo $_SERVER['REQUST_URI']; ?>?<?php echo str_replace('&offset=' . $_GET['offset'], '', $_SERVER['QUERY_STRING']); ?> &offset=<?php echo $_GET['offset'] + $_GET['idx_results']; ?>">&gt;&gt; Next</a></div>
        </div>
    <?php endif; ?>
<?php endif; ?>

<script type="text/javascript" charset="utf-8"> 
    $(document).ready(function(){
        $(".buttons a[rel^='prettyPhoto']").prettyPhoto({theme: 'light_rounded'});
        code.init();
    });
</script> 