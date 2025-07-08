<!DOCTYPE html>
<html>
<head>
    <title>Category Notification</title>
</head>
<body>
    <h1>Category {{ ucfirst($action) }}</h1>

    @if($action === 'added')
        <p>A new category named <strong>{{ $category->name }}</strong> has been added.</p>
    @elseif($action === 'deleted')
        <p>The category named <strong>{{ $category }}</strong> has been deleted.</p>
    @endif

    <p>Thank you.</p>
</body>
</html>