<?php /* Template Name: Panier */ get_header(); ?>

<div class="page-head">
	<div class="container">
		<div class="page-head-content">
			<div class="breadcrumb-wrap">
				<span><a href="<?php echo get_home_url(); ?>" class="home">Home</a></span><i>&#047;</i> <span><span>Panier</span></span>
			</div>
		</div>
	</div>
</div>
<div class="container-wrap">
	<div class="default-p container">
		<div class="row">
			<div class="main col-md-12">
				<div class="commerce commerce-cart">
					<form>
						<table class="shop_table cart">
							<thead>
								<tr>
									<th class="product-remove">&nbsp;</th>
									<th class="product-thumbnail">&nbsp;</th>
									<th class="product-name">Billet</th>
									<th class="product-price">Prix</th>
									<th class="product-quantity">Quantité</th>
									<th class="product-subtotal">Total</th>
								</tr>
							</thead>
							<tbody>
								<tr class="cart_item">
									<td class="product-remove">
										<a href="#" class="remove">&times;</a>
									</td>
									<td class="product-thumbnail">
										<a href="#">
											<img width="100" height="100" src="<?php echo get_template_directory_uri(); ?>/images/event/Bring-Me-The-Horizon.jpg" alt="rock13"/>
										</a>
									</td>
									<td class="product-name">
										<a href="#">Bring Me The Horizon</a>
									</td>
									<td class="product-price">
										<span class="amount">32€</span>
									</td>
									<td class="product-quantity">
										<div class="quantity">
											<input type="number" value="1" class="input-text qty text" size="4"/>
										</div>
									</td>
									<td class="product-subtotal">
										<span class="amount">32€</span>
									</td>
								</tr>
								<tr class="cart_item">
									<td class="product-remove">
										<a href="#" class="remove">&times;</a>
									</td>
									<td class="product-thumbnail">
										<a href="#">
											<img width="100" height="100" src="<?php echo get_template_directory_uri(); ?>/images/event/huge_avatar.jpg" alt="rock17"/>
										</a>
									</td>
									<td class="product-name">
										<a href="#">Bad Omens</a>
									</td>
									<td class="product-price">
										<span class="amount">32€</span>
									</td>
									<td class="product-quantity">
										<div class="quantity">
											<input type="number" value="1" class="input-text qty text" size="4"/>
										</div>
									</td>
									<td class="product-subtotal">
										<span class="amount">32€</span>
									</td>
								</tr>
								<tr>
									<td colspan="6" class="actions">
										<div class="coupon">
											<label for="coupon_code">Code promo:</label>
											<input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="Code promo"/>
											<input type="submit" class="button" name="apply_coupon" value="Appliquer code promo"/>
										</div>
										<input type="submit" class="button" name="update_cart" value="Rafraichir panier"/>
									</td>
								</tr>
							</tbody>
						</table>
					</form>
					<div class="cart-collaterals">
						<div class="cart_totals">
							<h2>Total du Panier</h2>
							<table>
								<tr class="order-total">
									<th>Total</th>
									<td><strong><span class="amount">64€</span></strong></td>
								</tr>
							</table>
							<div class="checkout">
								<a href="#" class="checkout-button button alt wc-forward">Procéder au payement</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
