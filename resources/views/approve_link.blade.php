<h1>

Hello Admin {{$details['name']}},
</h1>
<p>
This mail is in response to your request for registering for the Admin Panel for Sarvasya Rakshan.

Please find the given link below and provide the appropriate information for Approval.

</p>
@component('mail::button',['url'=> 'http://797dd89bdb25.ngrok.io/admin_reg','color'=>'success'])
    Click Here
@endcomponent

<p>
Thanks
Team Sarvasya Rakshan
</p>

