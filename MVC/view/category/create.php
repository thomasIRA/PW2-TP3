
<main>
    <header>
        <h2>Create Category</h2>
    </header>
    <section>
       <form action="{{ path }}category/store" method="post">
        <label>Category name
            <input type="text" name="category" value="{{ category.category }}" required>
            <span class="error">{{ errors.category }} {{ errors.exist}}</span>
        </label>
        <input type="submit" value="create" class="button">
       </form>
    </section>
</main>