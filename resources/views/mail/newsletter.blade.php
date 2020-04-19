
@component('mail::message')
<h1>You Subscribed</h1>

<p>{!!App\Helpers\MailVar::email($msg->msg,$email)!!}</p>
Thanks,<br>
Nazam
@endcomponent