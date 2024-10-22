import React from "react";
import MainBanner from "../components/MainBanner";

const Exhibitions = () => {
  const slug = "exhibitions";
  return (
    <>
      <MainBanner slug={slug} />
      <section className="exhibitions">Exhibitions.jsx</section>
    </>
  );
};

export default Exhibitions;
