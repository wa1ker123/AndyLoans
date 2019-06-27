<?php
   /**
    *
    * @package WordPress
    * @subpackage Twenty_Seventeen
    * @since 1.0
    * @version 1.0
    */

   get_header(); ?>
<div id="primary" class="content-area">
   <main id="main" class="site-main" role="main">
      <?php
         include_once 'inc/components/objectaccordion.php';
         //The array of faq items which is passed to the accordion component for array generation
         $faqArray = array();

         //Faq item
         $faqTitle = 'What personal loans do we find?';
         $faqCategory = 'personalloans';
         $faqBody = '<p class="accordion-content mb-0 pl-0 py-3">Our partner-lenders find personal loans from $300 to $10,000, and the repayment period will depend on the amount you choose to borrow. </p>';
         $faqObject = new ArrayItem($faqTitle, $faqCategory,$faqBody);
         array_push($faqArray, $faqObject);

         //Faq item
         $faqTitle = 'Does it cost extra to secure a personal loan?';
         $faqCategory = 'personalloans';
         $faqBody = '<p class="accordion-content mb-0 pl-0 py-3">No, our service is free of charge. We simply partner with a lender that can give you a fair go. Saving the hassle of endless searching and deciding on the ‘right’ lender. We do all that for you! </p>';
         $faqObject = new ArrayItem($faqTitle, $faqCategory,$faqBody);
         array_push($faqArray, $faqObject);

         //Faq item
         $faqTitle = 'How do I qualify for your service?';
         $faqCategory = 'personalloans';
         $faqBody = '		<p class="accordion-content mb-0 pl-0 py-3">You’ll need to be:</p>
         <ul class="list--bullets">
         	<li>Over 18 years of age</li>
         	<li>An American citizen</li>
         	<li>Or permanent resident</li>
         </ul>
           <p class="accordion-content mb-0 pl-0 py-3">You’ll need to have:</p>
           <ul class="list--bullets">
             <li>A regular source of income for at least 3 months</li>
             <li>Permanent address and checking account</li>
             <li>Employment information</li>
           </ul>
           <p class="mb-0">If you want to learn more about how we work, head over to the how it works page.</p>';
         $faqObject = new ArrayItem($faqTitle, $faqCategory,$faqBody);
         array_push($faqArray, $faqObject);

         //Faq item
         $faqTitle = 'How long before I receive my personal loan?';
         $faqCategory = 'personalloans';
         $faqBody = '<p class="accordion-content mb-0 pl-0 py-3">That depends on the lender you’re paired with. However, we do find you that lender just minutes after you submit a form, depending on when you submit the form.</p>';
         $faqObject = new ArrayItem($faqTitle, $faqCategory,$faqBody);
         array_push($faqArray, $faqObject);

         //Faq item
         $faqTitle = 'Do Andy Loans offer loans in my state?';
         $faqCategory = 'personalloans';
         $faqBody = '<p class="accordion-content mb-0 pl-0 py-3">Loan and lender offerings will differ from state to state, as each state has its own lending regulations in place. Once you select the state you live in during your application, we’ll let you know if you’re eligible. </p>';
         $faqObject = new ArrayItem($faqTitle, $faqCategory,$faqBody);
         array_push($faqArray, $faqObject);

         //faq item
         $faqTitle = 'How do I secure a loan?';
         $faqCategory = 'application';
         $faqBody = '<p class="accordion-content mb-0 pl-0 py-3">Securing a lender with Andy Loans is simple. Just follow three steps; complete a form, wait for a lender, meet your new lender! It’s that easy. Of course, the assessment of your submission is subject to each individual lender and we cannot guarantee approval. If you have any questions regarding your outcome, just contact your new lender.</p>';
         $faqObject = new ArrayItem($faqTitle, $faqCategory,$faqBody);
         array_push($faqArray, $faqObject);

         //faq item
         $faqTitle = 'Do you accept phone submissions?';
         $faqCategory = 'application';
         $faqBody = '<p class="accordion-content mb-0 pl-0 py-3">Andy Loans is 100% online, so there is no need to ring up - just submit a form online in minutes and have a new lender in no time. </p>';
         $faqObject = new ArrayItem($faqTitle, $faqCategory,$faqBody);
         array_push($faqArray, $faqObject);

         //FAQ Item
         $faqTitle = 'What happens to my data?';
         $faqCategory = 'fees';
         $faqBody = '<p class="accordion-content mb-0 pl-0 py-3">When you work with Andy Loans, your data is secure. We use third-party encryption to keep your data safe. If you have any concerns about your privacy, take a look at our policy.</p>';
         $faqObject = new ArrayItem($faqTitle, $faqCategory,$faqBody);
         array_push($faqArray, $faqObject);

         //FAQ Item
         $faqTitle = 'What are the costs of a loan?';
         $faqCategory = 'feesandrepayments';
         $faqBody = '<p class="accordion-content mb-0 pl-0 py-3">The costs of your personal loan are subject to individual lenders. We cannot speak for the fees and charges of other lenders. If you have questions about the costs of your loan before you accept your contract, please feel free to contact your lender.</p>';
         $faqObject = new ArrayItem($faqTitle, $faqCategory,$faqBody);
         array_push($faqArray, $faqObject);

         //FAQ Item
         $faqTitle = 'How do repayments work?';
         $faqCategory = 'fees';
         $faqBody = '<p class="accordion-content mb-0 pl-0 py-3">Repayments are subject to each individual lender, however, typically lenders will set up a direct debit with your nominated bank account. If you have any issues with your repayments, please contact your lender directly.</p>';
         $faqObject = new ArrayItem($faqTitle, $faqCategory,$faqBody);
         array_push($faqArray, $faqObject);

           //FAQ Item
           $faqTitle = 'How do I leave feedback?';
           $faqCategory = 'all';
           $faqBody = '<p class="accordion-content mb-0 pl-0 py-3">If you wish to submit your feedback, please send our customer service team an email at <a href="mailto:hello@andyloans.com">hello@andyloans.com</a>. We’ll do our best to respond to your query as quickly as possible.</p>';
           $faqObject = new ArrayItem($faqTitle, $faqCategory,$faqBody);
           array_push($faqArray, $faqObject);
         ?>
      <!-- FAQ -->
      <section class="background--light-grey">
         <div class="container">
            <div class="row">
               <!-- Section Title -->
               <div class="col-12 text-center m-auto">
                  <h1 class="">FAQ</h2>
                  <p class="mb-4 mb-lg-5">
                     You can bet that Andy's got the answers to your questions.
                  </p>
                  <p class="py-2 bold">Filter by:</p>
                  <div class="row mb-4" id="faq-buttons">
                     <div class="col-12 text-center mb-2 mb-lg-4">
                        <a href="#accordion" onclick="filterSelection('all')" class="btn btn__faq-filter faq-active w-100">All</a>
                     </div>
                     <div class="col-12 col-md-4 text-center mb-2 mb-lg-0">
                        <a href="#accordion" onclick="filterSelection('personalloans')" class="btn btn__faq-filter w-100">Personal Loans</a>
                     </div>
                     <div class="col-12 col-md-4 text-center mb-2 mb-lg-0">
                        <a href="#accordion" onclick="filterSelection('application')" class="btn btn__faq-filter w-100">Securing A Loan</a>
                     </div>
                     <div class="col-12 col-md-4 text-center text-lg-right mb-2 mb-lg-0">
                        <a href="#accordion" onclick="filterSelection('feesandrepayments')" class="btn btn__faq-filter w-100">Fees & Repayments</a>
                     </div>
                  </div>
                  <div id="accordion" class="accordion">
                     <?php generateAccordionCards($faqArray); ?>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Contact CTA section -->
      <?php include_once 'inc/components/cta-banner-contact.php'; ?>
      <script>
         // Filter Questions in FAQ by category with 'c' being the category
         function filterSelection(c) {
         	var x, i;
         	x = document.getElementsByClassName("filterDiv");
         	if (c == "all") c = "";
         	for (i = 0; i < x.length; i++) {
         		addClass(x[i], "d-none");
         		if (x[i].className.indexOf(c) > -1) removeClass(x[i], "d-none");
         	}
         }

         function addClass(element, name) {
         	var i, arr1, arr2;
         	arr1 = element.className.split(" ");
         	arr2 = name.split(" ");
         	for (i = 0; i < arr2.length; i++) {
         		if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
         	}
         }

         function removeClass(element, name) {
         	var i, arr1, arr2;
         	arr1 = element.className.split(" ");
         	arr2 = name.split(" ");
         	for (i = 0; i < arr2.length; i++) {
         		while (arr1.indexOf(arr2[i]) > -1) {
         			arr1.splice(arr1.indexOf(arr2[i]), 1);
         		}
         	}
         	element.className = arr1.join(" ");
         }

         // Add active class to the current button (highlight it)
         var btnContainer = document.getElementById("faq-buttons");
         var btns = btnContainer.getElementsByClassName("btn");
         for (var i = 0; i < btns.length; i++) {
         	btns[i].addEventListener("click", function(){
         		var current = document.getElementsByClassName("faq-active");
         		current[0].className = current[0].className.replace(" faq-active", "");
         		this.className += " faq-active";
         	});
         }
      </script>
   </main>
   <!-- #main -->
</div>
<!-- #primary -->
<?php
get_footer();
