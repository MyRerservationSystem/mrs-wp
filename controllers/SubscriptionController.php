<?php namespace Sagenda\Controllers;

use Sagenda\webservices\sagendaAPI;
include_once( SAGENDA_PLUGIN_DIR . 'webservices/sagendaAPI.php' );

/**
* This controller will be responsible for displaying the subscription form in frontend in order to register the visitor's booking.
*/
class SubscriptionController
{
  /**
  * @var string - name of the view to be displayed
  */
  private $view = "subscription.twig" ;

  /**
  * Display the subscription form
  * @param  object  $twig       TWIG template renderer
  * @param  object  $booking    Booking object
  */
  public function showSubscription($twig, $booking)
  {
    $booking = $this->fillBookingWithFormValues($booking);
    print_r($booking);

    if($this->setBookingWithSubmissionCheck($booking))
    {
      return $booking;
    }
    else
    {
      $warning = __('Please fill out all the required fields','sagenda-wp');
    }

    echo $twig->render($this->view, array(
      'subscription'                  => __( 'Subscription', 'sagenda-wp' ),
      'email'                         => __('Email', 'sagenda-wp'),
      'firstname'                     => __('First Name', 'sagenda-wp'),
      'lastname'                      => __('Last Name', 'sagenda-wp'),
      'title'                         => __('Title', 'sagenda-wp'),
      'titleMr'                       => __('Mr.', 'sagenda-wp'),
      'titleMrs'                      => __('Mrs.', 'sagenda-wp'),
      'titleMiss'                     => __('Miss', 'sagenda-wp'),
      'titleDr'                       => __('Dr', 'sagenda-wp'),
      'booking'                       => $booking,
      'warning'                       => $warning,
      'phone'                         => __('Phone Number', 'sagenda-wp'),
      'description'                   => __('Description', 'sagenda-wp'),
      'submit'                        => __('Submit', 'sagenda-wp'),
      'backToCalendar'                => __('Back to Calendar', 'sagenda-wp'),

      ''                   => __('', 'sagenda-wp'),
      ''                   => __('', 'sagenda-wp'),
    ));
  }

  /**
  * Check if the booking is ready to for submission,
  * @param  object  $booking    Booking object
  */
  private function setBookingWithSubmissionCheck($booking)
  {
    if($booking->isReadyForSubmission())
    {
      echo "booking object =".$booking->toJson();
      $result = $this->setBooking($booking);
      print_r($result) ;
      return true;
    }
    return false;
  }

  /**
  * Fill the object Booking with user input from view.
  * @param  object  $booking    Booking object
  */
  private function fillBookingWithFormValues($booking)
  {
    if(isset($_POST['firstname']))
    {
      $booking->FirstName = $_POST['firstname'];
    }

    if(isset($_POST['lastname']))
    {
      $booking->LastName = $_POST['lastname'];
    }

    if(isset($_POST['courtesy']))
    {
      $booking->Courtesy = $_POST['courtesy'];
    }

    if(isset($_POST['description']))
    {
      $booking->Description = $_POST['description'];
    }

    if(isset($_POST['email']))
    {
      $booking->Email = $_POST['email'];
    }

    if(isset($_POST['phone']))
    {
      $booking->PhoneNumber = $_POST['phone'];
    }

    return $booking ;
  }

  /**
  * Submit the booking to the WebService
  * @param  object  $booking    Booking object
  */
  private function setBooking($booking)
  {
    $sagendaAPI = new sagendaAPI();
    return $sagendaAPI->setBooking($booking);
  }
}
