<h2>Hello <?=$userName ?></h2>
<form action="" method="post">
    <select name="ccard" id="">
        <option value="v">Visa</option>
        <option value="d">Discover</option>
        <option value="m">Master Card</option>
    </select>
    <br/>

    <!-- radio buttons -->
    <input type="radio" name="drink" value="dp" checked>Dr Pepper<br/>
    <input type="radio" name="drink" value="sp">Sprite<br/>
    <input type="radio" name="drink" value="co">Coke<br/>

    <!-- text area -->
    <textarea name="comments" id="" cols="30" rows="10">Additional Comments</textarea>
    <br/>

    <!-- checkboxes -->
    <input type="checkbox" value="Pepperoni" name="top[]">Pepperoni<br/>
    <input type="checkbox" value="Mushroom" name="top[]">Mushroom<br/>
    <input type="checkbox" value="Olives" name="top[]">Olives<br/>

    <input type="submit" value="Login">
    <input type="hidden" name="formType" value="order">
    <input type="hidden" name="userName" value=<?=$userName ?>>
</form>