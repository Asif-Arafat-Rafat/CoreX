<?php
include "./components/homepage/header.php";
include "./components/homepage/nav.php";
include './components/homepage/form.php';
include './components/homepage/cart.php';
include './backend/database/connection.php';
?>


    <div class="form-container repairform">
    <h2>PC Repair Query</h2>
    <form method="POST" action="./backend/formconn/repform.php">
        <!-- Phone Number -->
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="tel" class="form-control" id="phone" name="phone" required pattern="01[3-9][0-9]{8}" placeholder="Enter your Bangladeshi phone number">
            </div>

        <!-- PC Part Dropdown with inline "Other" input -->
        <div class="form-group flex-group" id="select-row">
            <div>
                <label for="part">Component</label>
                <select id="part" class="form-control" name="part" required onchange="toggleOtherInput(this)">
                    <option value="" disabled selected hidden>Select a component</option>
                    <option value="Laptop">Laptop</option>
                    <option value="Desktop">Desktop</option>
                    <option value="Monitor">Monitor</option>
                    <option value="Keyboard">Keyboard</option>
                    <option value="Others">Others</option>
                </select>
            </div>
            <!-- Inline input for "Other" option -->
            <div id="otherDiv">
                <input type="text" class="form-control other-input" id="otherComponent" name="otherComponent" placeholder="Specify other">
            </div>
        </div>
        <div class="form-group">
            <label for="urgency">Urgency</label>
            <select id="urgency" class="form-control" name="urgency" required onchange="updateCost(this)">
                <option value="" disabled selected hidden>Select urgency</option>
                <option value="48">Within 48 hours</option>
                <option value="24">Within 24 hours (+200 Taka)</option>
                <option value="12">Within 12 hours (+500 Taka)</option>
                <option value="6">Within 6 hours (+1000 Taka)</option>
            </select>
        </div>

        <!-- Display Cost -->
        <div class="cost-display" id="costDisplay">
            Please note: The time starts when we receive your product. It may take less time than the selected option, and the urgency affects only the repair priority, not the delivery time.
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" rows="4" placeholder="Describe the problem" required></textarea>
        </div>
        <button type="submit" class="btn">Submit Repair Query</button>
    </form>
</div>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $phone = $_POST['phone'];
        $part = $_POST['part'];
        $other_part = isset($_POST['other_part']) ? $_POST['other_part'] : '';
        $description = $_POST['description'];

        echo "<h3>Submitted Data</h3>";
        echo "<p><strong>Phone:</strong> $phone</p>";
        echo "<p><strong>Part:</strong> " . ($part === 'Others' ? $other_part : $part) . "</p>";
        echo "<p><strong>Description:</strong> $description</p>";
    }
    ?>



<?php
include './components/homepage/footer.php';
include './components/homepage/bottom.php';
?>
