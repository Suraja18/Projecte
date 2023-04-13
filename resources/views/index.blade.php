<h1>This is Gonna Be My Custom Home Page.</h1>
<h2>My name is</h2>
<h1><a href="{{URL::to('/views')}}">View</a></h1>
<div>I dont know how to use github right now</div>
<h5>Current Url:</h5>{{URL::current()}}
<h5>Last Url:</h5>{{URL::previous()}}
<h5>Full Url:</h5>{{URL::full()}}
<form action="{{URL::to('/welcome/Suraj')}}">
    <input type="text" placeholder="Enter Your Name" />
    <button>Submit</button>
</form>