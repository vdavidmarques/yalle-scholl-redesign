import { useEffect, useState } from "react";

function App() {
  const [publications, setPublications] = useState([]);
  const [loading, setLoading] = useState(true);

  useEffect(() => {
    fetch(`${import.meta.env.VITE_API_URL}/publications`)
      .then((res) => res.json())
      .then((data) => {
        setPublications(data);
        setLoading(false);
      })
      .catch(() => {
        console.error("Erro ao buscar publicações");
        setLoading(false);
      });
  }, []);

  return (
    <div className="max-w-3xl mx-auto p-4">
      <h1 className="text-2xl font-bold mb-4">Publicações</h1>

      {loading ? (
        <p className="text-gray-500">Carregando...</p>
      ) : (
        publications.map((pub) => (
          <div
            key={pub.id}
            className="mb-6 border rounded p-4 shadow bg-white"
          >
            <h2 className="text-xl font-semibold mb-2">{pub.title}</h2>
            <p className="text-gray-700 whitespace-pre-line">{pub.body}</p>
          </div>
        ))
      )}
    </div>
  );
}

export default App;
