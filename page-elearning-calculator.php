<?php
/* Template Name: e-Learning Calculator */ 

get_header(); ?>

<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/product-calculator.css?v=<?php echo md5_file( get_stylesheet_directory().'/css/product-calculator.css' );?>" type="text/css">

<div class="main">
	<div class="main-left">
		
		<div class="content-area">
		<h2><?php if( get_field('secondary_title') != '' ){
			the_field('secondary_title');
		}else{
			the_title();
		} ?> <span>Text Size &nbsp;<a href="#smaller" class="minus" alt="Smaller" title="Smaller">-</a><a href="#larger" class="plus" alt="Larger" title="Larger">+</a></span></h2>
			<br/>
			<h3>UCF REC e-Learning Pricing Structure</h2>
			<div class="grey-style-table">
			   <table>
                    <tr>
                        <td>
                            Type of Course
                        </td>
                        <td>
                            Price per Course
                        </td>
                    </tr>
                    <tr>
                        <td>
                            0 - 1 CEU Credit
                        </td>
                        <td>
                            $5.00
                        </td>
                    </tr>
                    <tr>
                        <td>
                            2 - 6 CEU Credit Course
                        </td>
                        <td>
                            $10.00
                        </td>
                    </tr>
                    <tr>
                        <td>
                            6 - 13 CEU Credit Course
                        </td>
                        <td>
                            $25.00
                        </td>
                    </tr>
                    <tr>
                        <td>
                            1 - 2 CME Credit Course
                        </td>
                        <td>
                            $15.00
                        </td>
                    </tr>
                    
				</table>
			</div>
			
        <h3>Calculator</h2>
			<div class="product-calculator" >
                <table >
                    <tr>
                        <td width="35%">
                            Course
                        </td>
                        <td width="">
                            Cost
                        </td>
                        <td>
                            Qty.
                        </td>
                        <td width="20%">
                        	Total
                        </td>
                    </tr>
                    <tr class="product-calculator-row">
                        <td>
                            0 - 1 CEU Credit
                        </td>
                        <td id="cost_1" class="product-calculator-cost">
                            $5.00
                        </td>
                        <td>
                            <input id="1" class="product-calculator-qty" type="number" value="0" min="0"/>
                        </td>
                        <td id="total_1" class="product-calculator-total">
                            $0.00
                        </td>
                    </tr>
                    <tr class="product-calculator-row">
                        <td >
                            2 - 6 CEU Credit Course
                        </td>
                        <td id="cost_2" class="product-calculator-cost">
                            $10.00
                        </td>
                        <td>
                            <input id="2" class="product-calculator-qty" type="number" value="0" min="0"/>
                        </td>
                        <td id="total_2" class="product-calculator-total">
                            $0.00
                        </td>
                    </tr>
                    <tr class="product-calculator-row">
                        <td >
                            6 - 13 CEU Credit Course
                        </td>
                        <td id="cost_3" class="product-calculator-cost">
                            $25.00
                        </td>
                        <td>
                            <input id="3" class="product-calculator-qty" type="number" value="0" min="0"/>
                        </td>
                        <td id="total_3" class="product-calculator-total">
                            $0.00
                        </td>
                    </tr>
                    <tr class="product-calculator-row">
                        <td>
                            1 - 2 CME Credit Course
                        </td>
                        <td id="cost_4" class="product-calculator-cost">
                            $15.00
                        </td>
                        <td>
                            <input id="4" class="product-calculator-qty" type="number" value="0" min="0"/>
                        </td>
                        <td id="total_4" class="product-calculator-total">
                            $0.00
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">Total Payment:</td>
                        <td class="product-calculator-grand-total">$0.00</td>
                    </tr>
                    
                </table>
            </div>
                        
        
        <?php
        if ( have_posts() ) : 
			while ( have_posts() ) : the_post();
				echo '<article>'.the_content().'</article>';
        	endwhile; 
		endif; 
		?>
		</div>
		
	</div>
	<div class="main-right">
		<?php get_sidebar(); ?>
	</div>
</div>

<?php get_footer(); ?>
<script src="<?php bloginfo( 'template_directory' ); ?>/js/product-calculator.js"></script>

<script type="text/javascript">
	$('.product-calculator').productCalculator();
</script>