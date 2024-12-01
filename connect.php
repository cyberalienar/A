<?php
// POST থেকে ডেটা সংগ্রহ করা
$Name = isset($_POST['Name']) ? $_POST['Name'] : '';
$Email = isset($_POST['Email']) ? $_POST['Email'] : '';
$Message = isset($_POST['Message']) ? $_POST['Message'] : '';

// ডাটাবেস সংযোগ করা
$conn = new mysqli('localhost', 'root', '', 'portfolio');

// সংযোগ সফল না হলে ত্রুটি প্রদর্শন
if ($conn->connect_error) {
    die('Connection Failed: ' . $conn->connect_error);
} else {
    // ডেটা ইনসার্ট করার জন্য প্রিপেয়ার স্টেটমেন্ট
    $stmt = $conn->prepare("INSERT INTO registration (Name, Email, Message) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $Name, $Email, $Message);

    // সফলভাবে ডেটা ইনসার্ট হলে বার্তা প্রদর্শন
    if ($stmt->execute()) {
        echo "Message Sent Successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    // সংযোগ বন্ধ করা
    $stmt->close();
    $conn->close();
}
?>
