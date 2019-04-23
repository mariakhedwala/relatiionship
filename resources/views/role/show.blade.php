

<h2>Role Name: </h2>
<p>{{ $role->role }}</p>

<h3>Role Belongs to</h3>

<ul>
    @foreach($role->users as $user)
        <li>{{ $user->name }}</li>
    @endforeach
</ul>