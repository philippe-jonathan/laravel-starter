# Laravel discovery

Création d'une application de gestion client/stock;

### Installation :

- Installer Laravel,
- Créer un repo github

###  Migration :

- Relier votre BDD avec l'application,

- Faire une migration pour générer automatiquement la table "customers",
Qui contiendras: id, first_name, last_name, email, created_at

- Faire une migration pour générer automatiquement la table "products",
Qui contiendras: id, name, quantity, price

- Faire une migration pour générer automatiquement la table "groups",
Qui contiendras: id, name

- Faire une migration pour générer automatiquement la table "products_belong_groups",
Qui contiendras: fk_group, fk_product

### Client :

- Faire une route get '/customers' qui fait appelle au controller Customers et à la méthode 'getAllCustomers',

- Faire une route get '/customer/{id}' qui fait appelle au controller Customers et à la méthode 'getCustomer',

- Faire une route post '/customer' qui fait appelle au controller Customers et à la méthode 'addCustomer',

- Faire une route delete '/customer/{id}' qui fait appelle au controller Customers et à la méthode 'deleteCustomer',

- Faire une route put '/customer/{id}' qui fait appelle au controller Customers et à la méthode 'updateCustomer',

- Créer un controller 'Customers':

  - Avec la méthode 'getAllCustomers':
    - elle récupere tout les clients enregistré dans la table 'customers',
    - elle retourne la vue 'customers.blade.php' en lui passant le tableau des client;

  - Avec la méthode 'getCustomer':
    - elle récupère un client en fonction du paramètre id,
    - elle retourne la vue 'customer_details.blade.php' avec les informations du client;

  - Avec la méthode 'addCustomer':
    - elle enregistre un nouveau client dans la table 'customers',
    - elle redirige vers la route get '/customers';

  - Avec la méthode 'deleteCustomer':
   - elle supprime un client de la table 'customers' en fonction de l'id récupéré en paramètre
   - elle redirige vers la route get '/customers';

  - Avec la méthode 'updateCustomer':
   - elle modifie les informations du client dans la table 'customers' en fonction de l'id récupère en paramètre,
   - elle redirige vers la route put '/customers/';

- Créer une vue :
  - 'customers.blade.php' qui affiche les différent clients, et redirige vers la route get '/getCustomer/{id}' lors d'un clique sur un bouton "détails";

  - 'customer_details.blade.php' qui affiche un client en fonction du paramètre id,
  - elle permet de modifier les informations du client grâce à un formulaire (méthode put) qui envoie vers la route put '/customer/{id}';
  - elle permet de supprimer ce client avec un formulaire (méthode delete) qui envoie vers la route delete /customer/{id};
