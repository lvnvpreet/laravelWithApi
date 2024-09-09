
    <h1>User List</h1>
    <br>
    <br>
    <br>


    <!-- <pre>{{ print_r($userKey, true) }}</pre> -->

    <ul>
        <li>
            <span>Name</span><span><b>{{$userKey->name}}</b></span>
        </li>
        <li>        
            <span>UserId</span><span><b>{{$userKey->username}}</b></span>
        </li>
        <li>
            <span>Email</span><span><b>{{$userKey->email}}</b></span>
        </li>
        <li>
            <span>Website</span><span><b>{{$userKey->website}}</b></span>
        </li>
        <li>
            <span>Phone</span><span><b>{{$userKey->phone}}</b></span>
        </li>
    </ul>


