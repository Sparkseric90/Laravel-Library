C - Create a book

R - View a single book or a list of books.

U - Update books that are checkedout, or Damaged Books, books thats been checked out

D - Delete books that are beyond repair, delete books from the checkout section thats been returned


/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\

use Get, Put, Delete, Post

View all books table : Route::get('/books', 'bookscontroller@index');
View one single book by id : Route::get(/'books{ID}, 'bookscontroller@show');

Delete a single book by id : DELETE('/books{ID}', 'bookscontroller')
            