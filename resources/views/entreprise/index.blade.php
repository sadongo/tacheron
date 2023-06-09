hello

{{$entreprises}}

<h1>Tous les Entreprises</h1>

<p>
    <!-- Lien pour créer un nouvel Entreprise : "entreprises.create" -->
    <a href="{{ route('entreprises.create') }}" title="Créer un Entreprise" >Créer un nouveau entreprise</a>
</p>

<!-- Le tableau pour lister les Entreprises/entreprises -->
<table border="1" >
    <thead>
        <tr>
            <th>Titre</th>
            <th colspan="2" >Opérations</th>
        </tr>
    </thead>
    <tbody>
        <!-- On parcourt la collection de Post -->
        @foreach ($entreprises as $entreprise)
        <tr>
            <td>
                <!-- Lien pour afficher un Post : "entreprises.show" -->
                <a href="{{ route('entreprises.show', $entreprise) }}" title="Lire l'Entreprise" >{{ $entreprise->nom }}</a>
            </td>
            <td>
                <!-- Lien pour modifier un Post : "entreprises.edit" -->
                <a href="{{ route('entreprises.edit', $entreprise) }}" title="Modifier l'Entreprise" >Modifier</a>
            </td>
            <td>
                <!-- Formulaire pour supprimer un Post : "entreprises.destroy" -->
                <form method="POST" action="{{ route('entreprises.destroy', $entreprise) }}" >
                    <!-- CSRF token -->
                    @csrf
                    <!-- <input type="hidden" name="_method" value="DELETE"> -->
                    @method("DELETE")
                    <input type="submit" value="x Supprimer" >
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
